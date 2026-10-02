import { defineConfig } from 'astro/config';
import sitemap from '@astrojs/sitemap';

// Pages that should never appear in search results.
const PRIVATE = ['/onboarding/', '/client-directory/', '/client-insider/', '/contact/thanks/'];

export default defineConfig({
  site: 'https://bkept.co',
  trailingSlash: 'always',
  build: { format: 'directory' },
  integrations: [
    sitemap({ filter: (page) => !PRIVATE.some((p) => page.endsWith(p)) }),
  ],
});
