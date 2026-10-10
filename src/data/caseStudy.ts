// The homepage case study. Stays hidden while this is null.
// Real engagements only, anonymized unless the client agrees to be named.
export const caseStudy: null | {
  client: string;          // e.g. 'A 12-person design studio, Westchester'
  before: string[];        // where things stood
  changes: string[];       // what bkept put in place
  results: { stat: string; label: string }[]; // the numbers that changed
  note?: string;           // optional paraphrase from the owner
} = null;
