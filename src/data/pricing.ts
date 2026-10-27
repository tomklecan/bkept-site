// Published pricing. The Pricing page renders straight from this file.
// Model set 23 Oct 2026: a base retainer by annual revenue, functions added on top,
// and a few complexity factors quoted on the intro call.

export const retainerBands = [
  { name: 'Under $500K', details: 'Annual revenue. Up to 3 bank and card accounts.', price: 550 },
  { name: '$500K to $2M', details: 'Annual revenue. Up to 3 bank and card accounts.', price: 850 },
  { name: '$2M to $5M', details: 'Annual revenue. Up to 3 bank and card accounts.', price: 1350 },
];

// Shown as "From $X" under the bands.
export const customBand = { name: 'Over $5M', details: 'Larger operations or multiple entities.', from: 1750 };

export const functions = [
  { name: 'Accounts Payable', details: 'Bill entry, approval routing and scheduled pay runs.', price: 450 },
  { name: 'Accounts Receivable', details: 'Invoicing, payment matching and collections follow-up.', price: 400 },
  { name: 'AP + AR Together', details: 'Both of the above, run as one process.', price: 750 },
  { name: 'Payroll Oversight', details: 'Payroll runs reviewed, recorded and checked against filings.', price: 500 },
  { name: 'Sales Tax Oversight', details: 'Filings for up to 2 states. $150/mo for each additional state.', price: 500 },
  { name: 'Management Reporting', details: 'Budget vs. actual and a monthly KPI pack.', price: 400 },
];

// Things that can move a quote. Priced on the intro call, not shown as line items.
export const complexityFactors = [
  { name: 'More Accounts', details: 'Bank and card accounts beyond the 3 included.' },
  { name: 'Inventory', details: 'Inventory and cost of goods tracked in the books.' },
  { name: 'Job or Class Costing', details: 'Results reported by job, location or class.' },
  { name: 'Additional Entities', details: 'More than one company kept and closed each month.' },
];

export const dormantRate = 450;

// Optional extras. Set to null to hide them from the Pricing page.
export const setupFee: number | null = null;
export const cleanupNote: string | null = null;

export const fromPrice = Math.min(...retainerBands.map((b) => b.price));

export const usd = (n: number) => `$${n.toLocaleString('en-US')}`;
