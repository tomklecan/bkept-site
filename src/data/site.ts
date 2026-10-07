// One place for everything that repeats across pages.
// Change it here and every page updates on the next deploy.

export const site = {
  name: 'bkept.',
  url: 'https://bkept.co',
  tagline: 'Performance Finance',
  defaultTitle: 'bkept | Monthly Bookkeeping & Financial Reporting for Growing Businesses',
  defaultDescription:
    'Monthly bookkeeping, reconciliations and financial reporting delivered by the 10th, on a fixed retainer. Plus flat-fee cleanups and QuickBooks setups. Westchester, Long Beach Island and New York.',
  linkedin: 'https://www.linkedin.com/in/tommyklecan',
  bookingUrl: 'https://calendar.app.google/ooDvBA9WNF6wHNbP7',
  // The "Book a 20-minute call" buttons for prospects. Uses the same calendar as
  // client reviews for now; swap in a dedicated intro-call link when you have one.
  introCallUrl: 'https://calendar.app.google/ooDvBA9WNF6wHNbP7',
  responseTime: 'one business day',
};

export const nav = [
  { label: 'Services', href: '/#services' },
  { label: 'The Founder', href: '/#founder' },
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

export const locations = [
  { label: 'Westchester', href: '/westchester/' },
  { label: 'Long Beach Island', href: '/lbi/' },
];
