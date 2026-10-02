# bkept.co

The bkept website. Built with [Astro](https://astro.build) and hosted on Netlify.
Every page shares one header, one footer, and one stylesheet, so a change made once shows up everywhere.

## Where things live

| To change… | Edit this file |
|---|---|
| Nav links, contact emails, footer locations, LinkedIn, booking link | `src/data/site.ts` |
| Prices on the Pricing page (tiers, add-ons, dormant rate, setup fee) | `src/data/pricing.ts` |
| Images and downloadable files | `public/media/` (list in `src/data/media.ts`) |
| Colors, fonts, spacing | `src/styles/global.css` (tokens at the top) |
| Header / footer | `src/components/Header.astro`, `src/components/Footer.astro` |
| Services and founder sections (used on home + town pages) | `src/components/` |
| A single page's copy | `src/pages/<page>.astro` |

## How changes go live

1. A change is made on a branch and opened as a pull request.
2. Netlify builds a private preview link for that pull request.
3. Merge the pull request and Netlify publishes it to bkept.co within a minute or two.

## Contact form

The form on `/contact/` uses Netlify Forms. Submissions appear in Netlify under
**Site → Forms → contact**. Set email notifications there (Forms → Form notifications) to send
each submission to newclient@bkept.co.

## Running it locally (optional)

```
npm install
npm run dev        # http://localhost:4321
npm run build      # production build into dist/
npm run check      # type and template checks
```

`npm run fetch-media` copies any missing images and downloads from the old WordPress site into
`public/media/`. It only matters until those files are committed.

## Brand

Inter; gold gradient #8E7338 → #F9E7BA; white background; text #2D3436. Every page prints cleanly to PDF.
