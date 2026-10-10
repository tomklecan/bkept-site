// Numbers for the homepage case study teaser. The full story is src/pages/results/index.astro.
// Real engagements only, anonymized unless the client agrees to be named.
export const caseStudy: null | {
  client: string;
  results: { stat: string; label: string }[];
} = {
  client: 'A fast-growing drop-ship e-commerce business running 2,500 to 3,000 transactions a month.',
  results: [
    { stat: '6 months', label: 'of backlog brought current' },
    { stat: '3 months', label: 'to daily bill and bank processing' },
    { stat: '2,500+', label: 'transactions a month, now reviewed daily' },
    { stat: 'Monthly', label: 'reporting, where there was none' },
  ],
};
