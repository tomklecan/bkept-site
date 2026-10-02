// Published pricing. The Pricing page renders straight from this file.
// These match what is live on the WordPress site as of 2 Oct 2026.

export const retainerTiers = [
  { name: 'Tier 1: Core', details: 'Up to 100 Transactions. Max 3 Accounts.', price: 550 },
  { name: 'Tier 2: Scale', details: '101 - 500 Transactions.', price: 1150 },
  { name: 'Tier 3: Velocity', details: '501 - 750 Transactions.', price: 1550 },
];

export const addOns = [
  { name: 'Sales Tax Oversight', details: 'Management & filing oversight.', price: 500 },
  { name: 'AR/AP Management', details: 'Manual payable and receivable processing.', price: 750 },
  { name: 'Payroll Oversight', details: 'Administration & compliance synchronization.', price: 500 },
];

export const dormantRate = 450;

// Optional extras. Set to null to hide them from the Pricing page.
export const setupFee: number | null = null;
export const cleanupNote: string | null = null;

export const usd = (n: number) => `$${n.toLocaleString('en-US')}`;
