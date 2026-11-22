// Published pricing. The Pricing page renders straight from this file.
// Model set 23 Oct 2026: a base retainer by annual revenue, functions added on top,
// and a few complexity factors quoted on the intro call.
// 20 Nov 2026: bands lowered to start at $550, others scaled by the same ratio (550/750).

// 22 Nov 2026: no account caps. Revenue sets the price; each level adds service.
export const retainerBands = [
  {
    level: 'Essentials',
    name: 'Under $500K',
    details: 'Annual revenue.',
    price: 550,
    includes: ['Books closed by the 10th', '1:1 review each quarter', 'Replies within 2 business days'],
  },
  {
    level: 'Growth',
    name: '$500K to $2M',
    details: 'Annual revenue.',
    price: 850,
    includes: ['Everything in Essentials', 'Accrual entries: accrued bills, prepaids, deferred revenue', '30-minute 1:1 review every month', 'Replies within 1 business day'],
  },
  {
    level: 'Advanced',
    name: '$2M to $5M',
    details: 'Annual revenue.',
    price: 1300,
    includes: ['Everything in Growth', 'Books closed by the 8th', 'Fixed asset and depreciation schedules', 'Account Guide explaining every balance', '45-minute 1:1 review every month', 'Quarterly estimated tax check-in with your CPA', 'Same-day replies'],
  },
];

// Shown as "From $X" under the bands.
export const customBand = {
  level: 'Enterprise',
  name: 'Over $5M',
  details: 'Larger operations or multiple entities.',
  from: 1850,
  includes: ['Everything in Advanced', 'Books closed by the 7th', 'Management Reporting included', 'Consolidated reporting across entities', 'Shared Slack or Teams channel', 'Quarterly planning session'],
};

export const functions = [
  { name: 'Accounts Payable', details: 'Bill entry, approval routing and scheduled pay runs.', price: 500 },
  { name: 'Accounts Receivable', details: 'Invoicing, payment matching and collections follow-up.', price: 450 },
  { name: 'AP + AR Together', details: 'Both of the above, run as one process.', price: 850 },
  { name: 'Payroll Oversight', details: 'Payroll runs reviewed, recorded and checked against filings.', price: 500 },
  { name: 'Sales Tax Oversight', details: 'Filings for up to 2 states. $150/mo for each additional state.', price: 500 },
  { name: 'Management Reporting', details: 'Budget vs. actual and a monthly KPI pack.', price: 500 },
];

// Things that can move a quote. Priced on the intro call, not shown as line items.
export const complexityFactors = [
  { name: 'Unusual Account Load', details: 'Far more bank, card or payment accounts than a business your size usually runs.' },
  { name: 'Inventory', details: 'Inventory and cost of goods tracked in the books.' },
  { name: 'Job or Class Costing', details: 'Results reported by job, location or class.' },
  { name: 'Additional Entities', details: 'More than one company kept and closed each month.' },
];

export const dormantRate = 400;

// Optional extras. Set to null to hide them from the Pricing page.
export const setupFee: number | null = null;
export const cleanupNote: string | null = null;

export const fromPrice = Math.min(...retainerBands.map((b) => b.price));

export const usd = (n: number) => `$${n.toLocaleString('en-US')}`;
