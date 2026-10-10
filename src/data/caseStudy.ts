// The homepage case study. Stays hidden while this is null.
// Real engagements only, anonymized unless the client agrees to be named.
export const caseStudy: null | {
  client: string;          // e.g. 'A 12-person design studio, Westchester'
  before: string[];        // where things stood
  changes: string[];       // what bkept put in place
  results: { stat: string; label: string }[]; // the numbers that changed
  note?: string;           // optional paraphrase from the owner
} = {
  client: 'A fast-growing drop-ship e-commerce business running 2,500 to 3,000 transactions a month.',
  before: [
    'Books six months behind, covering Q4 2025 and Q1 2026.',
    'A separate supplier bill for every order, from every supplier, all entered by hand.',
    'Operations staff losing hours each month chasing bills to help the bookkeeper keep up.',
    'Bank accounts not reconciled in over a year, and no monthly reporting.',
  ],
  changes: [
    'Caught up the backlog, then redesigned the workflow to handle the volume.',
    'Supplier bills and bank transactions now handled daily, not in bursts.',
    'Added bill-ingestion software, so data entry is automated and our time goes to review.',
    'Set a monthly close and reporting calendar, with consistent metrics month to month.',
    'Started building performance analytics on top of the clean numbers.',
  ],
  results: [
    { stat: '6 months', label: 'of backlog brought current' },
    { stat: '3 months', label: 'to daily bill and bank processing' },
    { stat: '2,500+', label: 'transactions a month, now reviewed daily' },
    { stat: 'Monthly', label: 'reporting, where there was none' },
  ],
  note: 'The team now works with the books instead of around them, and sees what a serious accounting function can do for the business as sales keep growing.',
};
