// One place for everything that repeats across pages.
// Change it here and every page updates on the next deploy.

export const site = {
  name: 'bkept.',
  url: 'https://bkept.co',
  tagline: 'Fractional Accounting Operations',
  defaultTitle: 'Remote Bookkeeping & Accounting for Small Businesses | bkept',
  defaultDescription:
    'Your books, well kept. Remote bookkeeping and accounting operations for small businesses: monthly retainers, AP/AR or payroll, and QuickBooks setups and cleanups.',
  linkedin: 'https://www.linkedin.com/in/tommyklecan',
  bookingUrl: 'https://calendar.app.google/ooDvBA9WNF6wHNbP7',
  // The "Book a 20-minute call" buttons for prospects (bkept Intro Call schedule).
  introCallUrl: 'https://calendar.app.google/Dafwobu68VaHG7Sv5',
  // Client Hub login (ClientHub portal for existing clients).
  clientHubUrl: 'https://bkeptclientlogin.clienthub.app/#/login',
  responseTime: 'one business day',
  // Visitor stats: the site-specific script from plausible.io (Site settings > Installation).
  plausibleScript: 'https://plausible.io/js/pa-w3flOGXh9C8fHrk1EsdeS.js',
  // Google Search Console: paste the content="..." code from its HTML-tag verification here.
  googleSiteVerification: null as string | null,
};

export const nav = [
  { label: 'Services', href: '/#services' },
  { label: 'Private Client', href: '/private-client/' },
  { label: 'The Founder', href: '/#founder' },
  { label: 'Results', href: '/results/' },
  { label: 'Pricing', href: '/pricing/' },
  { label: 'The Library', href: '/the-library/' },
  { label: 'Partners', href: '/partners/' },
];

// The firm directory. Every page reads from this list.
export const desks = [
  { key: 'new', label: 'New Client Onboarding & Audits', email: 'newclient@bkept.co' },
  { key: 'partners', label: 'CPA & Agency Partnerships', email: 'partners@bkept.co' },
  { key: 'office', label: 'Billing & General Administration', email: 'office@bkept.co' },
] as const;

export const onboardingEmail = 'onboarding@bkept.co';
export const firmInviteEmail = 'tomklecan@bkept.co';

// Local pages, linked quietly from the footer. The homepage stays location-neutral.
export const locations = [
  { label: 'Long Beach Island', href: '/lbi/' },
  { label: 'NYC Metro', href: '/nyc/' },
];
