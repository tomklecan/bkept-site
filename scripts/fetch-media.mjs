// Copies any missing media files from the old WordPress uploads folder into public/media.
// Safe to run repeatedly: files already present are skipped, and a failed download
// only prints a warning so a build never breaks because the old site is gone.
import { readFile, writeFile, access, mkdir } from 'node:fs/promises';

const ORIGIN = process.env.MEDIA_ORIGIN ?? 'https://bkept.co/wp-content/uploads/';
const src = await readFile(new URL('../src/data/media.ts', import.meta.url), 'utf8');
const entries = [...src.matchAll(/path: '([^']+)', source: '([^']+)'/g)];

await mkdir(new URL('../public/media/', import.meta.url), { recursive: true });
let fetched = 0, missing = 0;
for (const [, path, source] of entries) {
  const dest = new URL(`../public${path}`, import.meta.url);
  try { await access(dest); continue; } catch {}
  try {
    const res = await fetch(ORIGIN + source);
    if (!res.ok) throw new Error(`HTTP ${res.status}`);
    await writeFile(dest, Buffer.from(await res.arrayBuffer()));
    fetched++;
  } catch (err) {
    missing++;
    console.warn(`fetch-media: could not get ${source} (${err.message})`);
  }
}
console.log(`fetch-media: ${fetched} downloaded, ${entries.length - fetched - missing} already present, ${missing} missing`);
