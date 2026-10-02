// Every image and download the site uses. Files live in /public/media.
// `source` is where each file sat on the old WordPress site; scripts/fetch-media.mjs
// copies anything missing from there. Once the files are committed, `source` is history.
export const media = {
  credProAdvisor: { path: '/media/qbo-proadvisor.png', source: '2026/01/QBO-PROAD.png' },
  credPayroll: { path: '/media/qbo-payroll.png', source: '2026/01/qbo-PAYROLL-BASDE.png' },
  credBookkeeper: { path: '/media/certified-bookkeeper.png', source: '2026/01/CERTIFIED-BOOKKEEPER.png' },
  founder: { path: '/media/tom-klecan.png', source: '2026/07/PROFESSIONAL-PIC.png' },

  cashFlowModel: { path: '/media/bkept-cash-flow-model.xlsx', source: '2026/02/Bkept-CashFlow-Model.xlsx' },
  pnlAnalyzer: { path: '/media/bkept-pnl-analyzer.xlsx', source: '2026/02/Bkept_PnL_Analyzer.csv.xlsx' },
  burnRate: { path: '/media/bkept-burn-rate.xlsx', source: '2026/02/BurnRate.xlsx' },
  monthEnd: { path: '/media/bkept-month-end-checklist.pdf', source: '2026/02/Month-End-Checklist.pdf' },
  expensePolicy: { path: '/media/bkept-expense-policy.pdf', source: '2026/02/Expense-Policy.pdf' },
  securityStandards: { path: '/media/bkept-security-standards.pdf', source: '2026/02/Bkept_Security_Protocol.pdf' },

  w9Blank: { path: '/media/w9-blank.pdf', source: '2026/02/content-Blank-W9-Form.pdf' },
  w9Bkept: { path: '/media/bkept-w9.pdf', source: '2026/02/content-bkept-W9-Form.pdf' },
  vendorChecklist: { path: '/media/bkept-new-vendor-checklist.html', source: '2026/02/content-bkept-New-Vendor-Checklist.html' },
  expenseForm: { path: '/media/bkept-expense-reimbursement.html', source: '2026/02/content-bkept-Expense-Reimbursement-Form.html' },
  cashFlowModelClient: { path: '/media/bkept-cash-flow-model-client.xlsx', source: '2026/02/Bkept-CashFlow-Model-1.xlsx' },
} as const;

export type MediaKey = keyof typeof media;
