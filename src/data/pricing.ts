// Published pricing. The Pricing page renders straight from this file.
// 22 Nov 2026 (Tom): one published base fee, add-ons quoted privately (no prices shown),
// projects from $500. Each client's monthly fee is set on the intro call with the
// internal pricing scorecard (size, activity, complexity, add-ons).

export const baseFee = 550;

export const baseIncludes = [
  { name: 'Bank & Credit Card Feeds', details: 'Every transaction coded and every bank and credit card account reconciled.' },
  { name: 'Monthly Financial Reporting', details: 'Your P&L, Balance Sheet and Cash Flow Statement, closed by the 10th and delivered with the Kept Memo.' },
];

// Shown without prices. Quoted on the intro call.
export const addOns = [
  { name: 'Accounts Payable & Receivable', details: 'Bills entered, approved and paid on schedule. Invoices sent, payments matched and collections followed up.' },
  { name: 'Sales Tax', details: 'Sales tax monitored and filed in every state where you owe it.' },
  { name: 'Compliance Monitoring', details: 'Business licenses, insurance policies, entity renewals and annual reports tracked so nothing lapses.' },
  { name: 'Financial Analysis', details: 'Spend and sales analysis, margins and trends, with what they mean for your decisions.' },
  { name: 'Budgeting', details: 'An annual budget built with you, then tracked against actual results every month.' },
  { name: 'Expense Management', details: 'Receipts, card spend and reimbursements captured, coded and approved through one process.' },
];

export const projectFrom = 500;

export const projects = [
  { name: 'Chart of Accounts Setup', details: 'A chart of accounts built around how your business runs and what your CPA needs.' },
  { name: 'QuickBooks Online Implementation', details: 'A new QuickBooks Online build or a move from Desktop or another system.' },
  { name: 'Other Software Implementation', details: 'Bill pay, expense, payroll and industry tools set up and connected to the books.' },
  { name: 'Targeted Financial Analysis', details: 'A one-time deep look at one question: pricing, margins, a location, a big decision.' },
  { name: 'Targeted Function Projects', details: 'One process fixed or built: catch-up and cleanup, AP or AR workflows, month-end close.' },
];

export const dormantRate = 250;

export const fromPrice = baseFee;

export const usd = (n: number) => `$${n.toLocaleString('en-US')}`;
