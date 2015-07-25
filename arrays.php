<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
/*DOCUMENT TYPE CODES
  NOTE: For Labels, use numbers (e.g. ENDREQ1) only if the effective dates are the
  same! ALWAYS use "1" if there is a "2" (e.g. don't use CRT if you are also using
  CRT2 for the same effective date, use CRT1 & CRT2 instead).*/
  $label_arr = array(
//Sensitive Documents (for those accidentally saved in the client's visible file OR for future use)
    'APP'       => 'Application',
    'BRL'       => 'Broker of Record Letter', //signed
    'GSD'       => 'Good Student Discount Form', //preferrably signed
    'INS'       => 'Inspection',
    'LJC'       => 'LoJack Certificate',
    'VSC'       => 'Vehicle Purchase/Lease Agreement',
//Cancellations, Reinstatements, Bills
    'CAN'       => 'Final Cancellation', //old, use for unofficial notice of final cancel
    'XCN'       => 'Final Cancellation', //use so cancellation file falls after files with same effective date
    'INV'       => 'Invoice',
    'IPC'       => 'Payment Confirmation (Installment)', //rarely used, use WCN if cancellation sent
    'LPS'       => 'Lapse in Coverage',
    'MBL'       => 'Mortgagee Bill',
    'NIC'       => 'Notice of Intent to Cancel',
    'NON'       => 'Non-Renewal Notice',
    'NSF'       => 'Cancellation Notice due to Non-Sufficient Funds',
    'RBL'       => 'Renewal Bill/Reminder to Pay',
    'REI'       => 'Reinstatement/Reissue', //shouldn't involve a lapse, use LPS for REI w/lapse
    'RPC'       => 'Renewal Payment Confirmation',
    'WCN'       => 'Withdrawal of Cancellation Notice',
//Offers (Renewal/Earthquake)
    'EQO'       => 'Earthquake Offer',
    'ROF'       => 'Renewal Offer',
    'ROF1'      => 'Renewal Offer',
    'ROF2'      => 'Renewal Offer: Revised or Duplicate',
//Endorsements, Audit (NOT Broker of Record)
    'AUD'       => 'Premium Audit',
    'ENDREQ'    => 'Change Request Pending', //shouldn't be saved to client file
    'ENDREQ1'   => 'Change Request Pending (Change # 1)', //shouldn't be saved to client file
    'ENDREQ2'   => 'Change Request Pending (Change # 2)', //shouldn't be saved to client file
    'END'       => 'Endorsement/Policy Change',
    'END1'      => 'Endorsement/Policy Change (1st End.)',
    'END2'      => 'Endorsement/Policy Change (2nd End.)',
    'END3'      => 'Endorsement/Policy Change (3rd End.)',
    'END4'      => 'Endorsement/Policy Change (4th End.)',
    'END5'      => 'Endorsement/Policy Change (5th End.)',
    'END6'      => 'Endorsement/Policy Change (6th End.)',
    'END7'      => 'Endorsement/Policy Change (7th End.)',
    'END8'      => 'Endorsement/Policy Change (8th End.)',
    'END9'      => 'Endorsement/Policy Change (9th End.)',
    'END10'     => 'Endorsement/Policy Change (10th End.)',
    'END11'     => 'Endorsement/Policy Change (11th End.)',
    'RND'       => 'Endorsement/Policy Change', //USE for endorsements eff. NEW/REN date so they fall after the NEW/REN dec
    'RND1'      => 'Endorsement/Policy Change (1st End.)',
    'RND2'      => 'Endorsement/Policy Change (2nd End.)',
    'RND3'      => 'Endorsement/Policy Change (3rd End.)',
    'RND4'      => 'Endorsement/Policy Change (4th End.)',
    'RND5'      => 'Endorsement/Policy Change (5th End.)',
    'RND6'      => 'Endorsement/Policy Change (6th End.)',
    'RND7'      => 'Endorsement/Policy Change (7th End.)',
    'RND8'      => 'Endorsement/Policy Change (8th End.)',
    'RND9'      => 'Endorsement/Policy Change (9th End.)',
    'RND10'     => 'Endorsement/Policy Change (10th End.)',
    'RND11'     => 'Endorsement/Policy Change (11th End.)',
//New, Renewal, Rewrite, Broker of Record
    'BND'       => 'Binder', //only use if actual "binder", otherwise use CPI
    'CPI'       => 'Confirmation of Policy Issuance', //to be deleted after NEW or REW dec received
    'BOR'       => 'Broker of Record Change Endorsement', //Use in place of NEW
    'BRK'       => 'Broker of Record Change Endorsement', //OLD, ERROR
    'TFL'       => 'Temporary Flood Declaration - Pending Policy Issuance (effective<br />date may change - pending approval due to 30 day waiting period)', //flood "binder" 
    'NEW'       => 'New Policy', //new business ONLY, use REW for company change or rewrite, BOR for brokered policies
    'NEWLV'     => 'New Policy - Light version, or lower quality version.',
    'NEW1'      => 'New Policy',
    'NEW2'      => 'New Policy: Revised or Duplicate',
    'REN'       => 'Renewal Policy',
    'RENLV'     => 'Renewal Policy - Light version, or lower quality version.',
    'REN1'      => 'Renewal Policy',
    'REN2'      => 'Renewal Policy: Revised or Duplicate',
    'REW'       => 'Rewritten Policy',
    'REW1'      => 'Rewritten Policy',
    'REW2'      => 'Rewritten Policy: Revised or Duplicate',
//Certificates, Evidences, Vehicle ID Cards
    'CRT'       => 'Certificate of Insurance', //Not Evidence
    'CRT1'      => 'Certificate of Insurance (Cert # 1)', //Not Evidence, cert of liability ins
    'CRT2'      => 'Certificate of Insurance (Cert # 2)', //Not Evidence, cert of liability ins
    'CRT3'      => 'Certificate of Insurance (Cert # 3)', //Not Evidence, cert of liability ins
    'CRT4'      => 'Certificate of Insurance (Cert # 4)', //Not Evidence, cert of liability ins
    'CRT5'      => 'Certificate of Insurance (Cert # 5)', //Not Evidence, cert of liability ins
    'BAI'       => 'Blanket Additional Insured Endorsement (For use with commercial certificates.  Form number must be listed on the certificate to apply.)',
    'BPW'       => 'Blanket Primary Wording Endorsement (For use with commercial certificates.  Form number must be listed on the certificate to apply.)',
    'BWS'       => 'Blanket Waiver of Subrogation Endorsement (For use with commercial certificates.  Form number must be listed on the certificate to apply.)',
    'BE3'       => 'Blanket Additional Insured, Primary Wording and Waiver of Subrogation Endorsement (For use with commercial certificates.  Form number must be listed on the certificate to apply.)',
    'EPI'       => 'Evidence of Property Insurance', //Not Cert. If correcting EPI, delete 1st, don't use EPI2
    'EPI1'      => 'Evidence of Property Insurance (1st Mortgagee)', //USE ONLY IF 2 MOTGAGEES TO SPECIFY "1ST MORTGAGEE"
    'EPI2'      => 'Evidence of Property Insurance (2nd Mortgagee)', //USE ONLY IF 2 MOTGAGEES TO SPECIFY "2ND MORTGAGEE"
    'IDC'       => 'Vehicle ID Card(s)',
    'IDT'       => 'Temporary Vehicle ID Card(s)',
//Miscellaneous
    'FRM'       => 'Policy Form/Specimen',
    'MEM'       => 'Memo',
    'REC'       => 'Loss Recommendations',
//Claim Docs
    'CLM'       => 'All claim payments and correspondence that were received<br />by our office (file may be large).',
    'CLM1'      => 'Claim: Info or Payment (Doc # 1)',
    'CLM2'      => 'Claim: Info or Payment (Doc # 2)',
    'CLM3'      => 'Claim: Info or Payment (Doc # 3)',
    'CLM4'      => 'Claim: Info or Payment (Doc # 4)',
    'CLM5'      => 'Claim: Info or Payment (Doc # 5)',
    'CLM6'      => 'Claim: Info or Payment (Doc # 6)',
    'CLM7'      => 'Claim: Info or Payment (Doc # 7)',
    'CLM8'      => 'Claim: Info or Payment (Doc # 8)',
    'CLM9'      => 'Claim: Info or Payment (Doc # 9)',
    'CLM10'     => 'Claim: Info or Payment (Doc # 10)',
    'CLM11'     => 'Claim: Info or Payment (Doc # 11)',
    'CLM12'     => 'Claim: Info or Payment (Doc # 12)',
    'CLM13'     => 'Claim: Info or Payment (Doc # 13)',
    'CLM14'     => 'Claim: Info or Payment (Doc # 14)',
    'CLM15'     => 'Claim: Info or Payment (Doc # 15)',
    'CLM16'     => 'Claim: Info or Payment (Doc # 16)',
  );
/*COMPANY CODES*/
  $code_arr = array(
    '12963'     => '21st Century Insurance Company',
    '22667'     => 'ACE American Insurance Company',
    '24856'     => 'Admiral Insurance Company',
    '33898'     => 'Aegis Security Insurance Company',
    '00001'     => 'Aetna Casualty and Surety Company',
    '22837'     => 'AGCS Marine Insurance Company',
    '19399'     => 'AIU Insurance Company',
    '29262'     => 'Allied Texas AGY Inc MGA Colonial Co Mutual',
    '19489'     => 'Allied World Assurance Company (U.S.) Inc. (fmly Commercial 
		     Underwriters Insurance Company)',
    '24319'     => 'Allied World Surplus Lines Insurance Company (fmly Darwin Select 		     Insurance Company)',
    '33189'     => 'Alterra Excess & Surplus Insurance Co (fmly Max Specialty  
                     Insurance Company)',
    '19100'     => 'AMCO Insurance Company',
    '10111'     => 'American Bankers Insurance Company of FL',
    '20427'     => 'American Casualty Company of Reading, PA',
    '00002'     => 'American Central Insurance Company',
    '10216'     => 'American Contractors Indemnity Company',
    '24066'     => 'American Fire and Casualty Company',
    '26247'     => 'American Guarantee and Liability Insurance Company',
    '43761'     => 'American International Insurance Company of CA, Inc.',
    '23469'     => 'American Modern Home Insurance Company',
    '19615'     => 'American Reliable Insurance Company',
    '19704'     => 'American States Insurance Company',
    '35912'     => 'American Western Home Insurance Company',
    '40142'     => 'American Zurich Insurance Company',
    '084806'    => 'Aspen Insurance UK Limited',
    '21865'     => 'Associated Indemnity Corporation',
    '19305'     => 'Assurance Company',
    '37273'     => 'AXIS Insurance Company',
    '26620'     => 'AXIS Surplus Insurance Company',
    '24813'     => 'Balboa Insurance Company',
    '41394'     => 'Benchmark Insurance Company',
    '068970'    => 'Anthem Blue Cross',
    '23620'     => 'Burlington Insurance Company',
    '38342'     => 'California Automobile Insurance Company',
    '00003'     => 'California Earthquake Authority',
    '00004'     => 'California FAIR Plan Association',
    '19518'     => 'Catlin Insurance Company, Inc.',
    '36951'     => 'Century Surety Company',
    '10052'     => 'Chubb National Insurance Company',
    '00005'     => 'CIBA Insurance Services',
    '10693'     => 'Civil Service Employees Insurance Company',
    '20532'     => 'Clarendon National Insurance Company',
    '39993'     => 'Colony Insurance Company',
    '13161'     => 'Commerce West Insurance Company',
    '20443'     => 'Continental Casualty Company',
    '14010'     => 'Crusader Insurance Company',
    '18953'     => 'CSE Safeguard Insurance Company',
    '35408'     => 'Delos Insurance Company (fmly Sirius America Insurance Company)',
    '42587'     => 'Depositors Insurance Company',
    '21326'     => 'Empire Fire and Marine Insurance Company',
    '21334'     => 'Empire Indemnity Insurance Company',
    '11512'     => 'Employers Compensation Insurance Company',
    '20648'     => 'Employers Fire Insurance Company',
    '10346'     => 'Employers Preferred Insurance Company',
    '10358'     => 'Encompass Insurance Company',
    '37915'     => 'Essentia Insurance Company',
    '39020'     => 'Essex Insurance Company',
    '35378'     => 'Evanston Insurance Company',
    '41483'     => 'Farmington Casualty Company',
    '20281'     => 'Federal Insurance Company',
    '19852'     => 'Financial Indemnity Company',
    '21660'     => 'Fire Insurance Exchange',
    '21873'     => 'Fireman\'s Fund Insurance Company',
    '37710'     => 'First American Property & Casualty Insurance Company',
    '34525'     => 'First American Specialty Insurance Company',
    '11177'     => 'First Financial Insurance Company',
    '24724'     => 'First National Insurance Company of America',
    '34916'     => 'First Specialty Insurance Corporation',
    '27626'     => 'FirstComp Insurance Company',
    '11185'     => 'Foremost Insurance Co Grand Rapids, MI',
    '10833'     => 'Gemini Insurance Company',
    '24732'     => 'General Insurance Company of America',
    '37362'     => 'General Star Indemnity Company',
    '10799'     => 'GeoVera Insurance Company',
    '39861'     => 'Golden Bear Insurance Company',
    '10836'     => 'Golden Eagle Insurance Corporation',
    '23809'     => 'Granite State Insurance Company',
    '37532'     => 'Great American E&S Insurance Company',
    '25224'     => 'Great Divide Insurance Company',
    '086160'    => 'Great Lakes Reinsurance (UK) PLC',
    '22357'     => 'Hartford Accident & Indemnity Company',
    '29424'     => 'Hartford Casualty Insurance Company',
    '19682'     => 'Hartford Fire Insurance Company',
    '37478'     => 'Hartford Insurance Company of the Midwest',
    '30104'     => 'Hartford Underwriters Insurance Company',
    '10200'     => 'Hiscox Insurance Company, Inc.',
    '25054'     => 'Hudson Insurance Company',
    '19429'     => 'Insurance Company of State of PA',
    '086160'    => 'Jackson National Life Insurance Company',
    '38920'     => 'Kinsale Insurance Company',
    '33138'     => 'Landmark American Insurance Company',
    '19437'     => 'Lexington Insurance Company',
    '085202'    => 'Lloyd`s of London',
    '048339'    => 'Lloyd`s Syndicate 2003',
    '26743'     => 'Maxum Indemnity Company',
    '11908'     => 'Mercury Casualty Company',
    '27553'     => 'Mercury Insurance Company',
    '36838'     => 'Mesa Underwriters Specialty Insurance Company',
    '25321'     => 'Metropolitan Direct P & C Ins Co',
    '40150'     => 'MGA Insurance Company Inc.',
    '26522'     => 'Mount Vernon Fire Insurance Company',
    '23701'     => 'National Automobile & Casualty Insurance Company',
    '20478'     => 'National Fire Insurance Company of Hartford',
    '19445'     => 'National Union Fire Ins Co Pittsburgh PA',
    '26093'     => 'Nationwide Affinity Insurance Company',
    '28223'     => 'Nationwide Agribusiness Insurance Company',
    '25453'     => 'Nationwide Insurance Company of America',
    '23779'     => 'Nationwide Mutual Fire Insurance Company',
    '23787'     => 'Nationwide Mutual Insurance Company',
    '37877'     => 'Nationwide Property & Casualty Insurance Co',
    '17370'     => 'Nautilus Insurance Company',
    '42307'     => 'Navigators Insurance Company',
    '23841'     => 'New Hampshire Insurance Company',
    '31470'     => 'NorGUARD Insurance Company',
    '29874'     => 'North American Specialty Insurance Company',
    '24015'     => 'Northland Insurance Company',
    '34630'     => 'Oak River Insurance Company',
    '24082'     => 'Ohio Security Insurance Company',
    '22748'     => 'Pacific Employers Insurance Company',
    '00007'     => 'Pacific National Insurance Company',
    '10887'     => 'Pacific Select Property Insurance Company',
    '37850'     => 'Pacific Specialty Insurance Company',
    '24198'     => 'Peerless Insurance Company',
    '32859'     => 'Penn-America Insurance Company',
    '10673'     => 'Penn-Star Insurance Company',
    '18058'     => 'Philadelphia Indemnity Insurance Company',
    '18619'     => 'Platte River Insurance Company',
    '37257'     => 'Praetorian Insurance Company',
    '24260'     => 'Progressive Casualty Insurance Company',
    '27804'     => 'Progressive West Insurance Company',
    '34690'     => 'Property and Casualty Ins Co of Hartford',
    '15059'     => 'Public Service Mutual Insurance Company',
    '11515'     => 'QBE Specialty Insurance Company',
    '43753'     => 'Republic Indemnity Company of California',
    '13056'     => 'RLI Insurance Company',
    '24740'     => 'Safeco Insurance Company of America',
    '39012'     => 'Safeco Insurance Company of Illinois',
    '15580'     => 'Scottsdale Indemnity Company',
    '41297'     => 'Scottsdale Insurance Company',
    '10936'     => 'Seneca Insurance Company Inc',
    '11000'     => 'Sentinel Insurance Company Ltd',
    '19216'     => 'Southern Insurance Company',
    '35076'     => 'State Compensation Insurance Fund of CA',
    '36102'     => 'State Insurance Fund of New York',
    '12793'     => 'Surety Company of the Pacific',
    '32107'     => 'Sutter Insurance Company',
    '19070'     => 'The Standard Fire Insurance Company',
    '18031'     => 'Topa Insurance Company',
    '44300'     => 'Tower Select Insurance Company (aka Tower Insurance Company of 
                     New York)',
    '20494'     => 'Transportation Insurance Company',     
    '31194'     => 'Travelers Casualty and Surety Company of America',
    '19046'     => 'Travelers Casualty Insurance Company of America',
    '36137'     => 'Travelers Commercial Insurance Company',
    '25682'     => 'Travelers Indemnity Company of CT',
    '25674'     => 'Travelers Property Casualty Company of America',
    '36161'     => 'Travelers Property Casualty Insurance Company',
    '21709'     => 'Truck Insurance Exchange',
    '27120'     => 'Trumbull Insrance Company',
    '29459'     => 'Twin City Fire Insurance Company',
    '15792'     => 'Underwriters at Lloyd`s London (IL)',
    '11770'     => 'United Financial Casualty Company',
    '25895'     => 'United States Liability Insurance Company',
    '10759'     => 'Universal North America Insurance Company',
    '20508'     => 'Valley Forge Insurance Company',
    '44393'     => 'West American Insurance Company',
    '25780'     => 'Williamsburg National Insurance Company',
    '37885'     => 'XL Specialty Insurance Company',
    '30120'     => 'ZNAT Insurance Company',
    '27855'     => 'Zurich American Insurance Company of Illinois',
    
//OLD - Delete after confirmation all docs are updated!
    '00001NA'   => 'Aetna Casualty and Surety Company', //old
    '00002NA'   => 'American Central Insurance Company', //old
    '084806AMB' => 'Aspen Insurance UK Limited', //old
    '068970AMB' => 'Blue Cross of California', //old
    '00003NA'   => 'Californi Earthquake Authority', //old
    '00004NA'   => 'California FAIR Plan Association', //old
    '00005NA'   => 'CIBA Insurance Services', //old
    '00006NA'   => 'Commercial Underwriters Insurance Company', //old
    '086160AMB' => 'Great Lakes Reinsurance (UK) PLC', //old
    '086160AMB' => 'Jackson National Life Insurance Company', //old
    '085202AMB' => 'Lloyd`s of London', //old
    '048339AMB' => 'Lloyd`s Syndicate 2003', //old
    '00007NA'   => 'Pacific National Insurance Company', //old
//OLD - USE NAIC (ABOVE)
    'ISO'       => 'Insurance Services Office, Inc.', //Policy Forms Only
//Direct Appointment
    '29459'     => 'Allied Insurance, a Nationwide Company',
    '0574781'   => 'California FAIR Plan Association',
    '0574781E'  => 'California Earthquake Authority',
    '45119'     => 'Civil Service Employees Insurance Company',
    '006506'    => 'Commerce West Insurance Company',
    '20596'     => 'Progressive (Drive Insurance)',
    '02945'     => 'Financial Indemnity Company',
    '001351'    => 'First American Specialty Insurance Company',
    'BRK530'    => 'GeoVera Insurance',
    '046126'    => 'Mercury Insurance Group',
    'NYSIF'     => 'New York State Insurance Fund',
    '0174650'   => 'Pacific National Insurance Company',
//Abram Interstate
    'ABRAMLL'   => 'Lloyds of London',
    'ABRAMS'    => 'Safeco Insurance Company',
//American Collectors Insurance
    '0413717'   => 'American Bankers Insurance',
//AJ Longo
    '04498550'  => 'Firemans Fund Insurance Company',
//Allied General
    '474601F'   => 'FirstComp Insurance Company',
    '474601L'   => 'Lexington Insurance Company',
    '474601T'   => 'Travelers Insurance Company',
//Anderson & Murison
    '08221BAB'  => 'American Bankers Insurance',
    '08221BAR'  => 'American Reliable Insurance',
    '08221BH'   => 'Hudson Insurance Company',
    '08221BCPL' => 'United States Liability Insurance Company',
    '08221BR'   => 'RLI Insurance Company',
    '08221BPUI' => 'Scottsdale Indemnity',
    '08221BT'   => 'Topa Insurance',
    '08221BPCL' => 'United States Liability Insurance Company',
//Arrowhead
    '001276'    => 'Balboa Insurance Company', //OLD
    '001276PUP' => 'RLI Insurance Company',
    '001276U'   => 'Universal North America Insurance Company',
//Appleby & Sterling
    '19031FA'   => 'First American Specialty Insurance Company',
    '19031GE'   => 'Golden Eagle Insurance',
    '19031LL'   => 'Lloyds of London',
    '19031OB'   => 'OneBeacon',
    '19031PS'   => 'Pacific Select Property',
    '19031P'    => 'Praetorian Insurance',
    '19031PSM'  => 'Public Service Mutual',
//American Team Managers
    'ATMAIG'    => 'American International Group',
    'ATMC'      => 'Chubb',
    'ATMFF'     => 'Firemans Fund Insurance',
//Brown & Brown
    'BBCNA'     => 'CNA Insurance Group',
    'BBT'       => 'Travelers Insurance Group',
//Bliss & Glennon
    '002659AW'  => 'American Western Home',
    '002659CS'  => 'Century Surety Company',
    '002659C'   => 'CIBA Insurance Services (See your policy for a complete list of participating companies)',
    '002659E'   => 'Essex Insurance Company',
    '002659GL'  => 'Great Lakes Reinsurance (UK)',
    '002659L'   => 'Lexington Insurance Company',
    '002659LL'  => 'Lloyds of London',
    '002659MS'  => 'Max Specialty Insurance Company',
    '002659N'   => 'Nautilus Insurance',
    '002659PA'  => 'Penn America Insurance',
    '002659PS'  => 'Penn Star Insurance',
    '002659PI'  => 'Philadelphia Indemnity Insurance Company',
    '002659US'  => 'United States Liability Insurance Company',
//Burns & Wilcox
    'SUTSC'     => 'Chubb',
    'SUTSL'     => 'Lexington Insurance Company',
    'SUTSR'     => 'RLI Insurance',
    'SUTSU'     => 'United States Liability Insurance Company',
//Boswell
    'BLL'       => 'Lloyds of London',
//Cabrillo
    '101841'    => 'Aegis Security Insurance Company',
    '794951841' => 'American Reliable Insurance Company',
//Condon & Skelly
    'CSMET'     => 'Metlife Auto & Home', //OLD - We use WIAA now.
//Executive Perils
    'ASICEP'    => 'Axis Surplus Insurance Company',
    'USLIEP'    => 'United States Liability Insurance Company',
//Gray-Stone
    '1531QBE'   => 'QBE Specialty Insurance Company',
    '1531RI'    => 'Republic Indemnity',
    '1531T'     => 'Travelers Insurance Group',
    '1531Z'     => 'Zenith National Insurance',
//Hagerty
    '65492AE'   => 'Allstate: Encompass Insurance Company',
    '65492OE'   => 'OneBeacon: Essentia Insurance Company',
//Hull & Co.
    '31381GS'   => 'American International Group',
    '31381B'    => 'The Burlington Insurance',
    '31381E'    => 'Evanston Insurance',
    '31381F'    => 'First Financial Insurance',
    '31381N'    => 'Nautilus Insurance',
    '31381S'    => 'Scottsdale Insurance Company',
    '31381Z'    => 'Zurich Insurance Company',
//JR Olsen Bonds
    'JROBP'     => 'Platte River Insurance',
    'JROBH'     => 'Hartford Fire Insurance Company',
//McGraw
    'B13424'    => 'Pacific Specialty Insurance',
    'B13424N'   => 'Northland Insurance Company',
//Monarch
    '006153A'   => 'Aspen Insurance UK Limited',
    '006153B'   => 'The Burlington Insurance Company',
    '006153C'   => 'Colony Insurance Company',
    '006153H'   => 'Hudson Unsurance Company',
    '006153LL'  => 'Lloyds of London',
    '006153N'   => 'Navigators Insurance Company',
    '006153RLI' => 'RLI Insurance Company',
    '006153S'   => 'Scottsdale Insurance Company',
    '006153T'   => 'Topa Insurance Company',
    '006153US'  => 'United States Liability Ins. Company',
//T.V. Humphreys/Shaw Moses
    'TVHAIG'    => 'American International Group',
//UNIFAX
    '023140'    => 'Crusader Insurance',
//Union General
    'AGT341'    => 'Maxim Indemnity Company',
//Wholesale Connection
    'WCC'       => 'Catlin Insurance Company',
    'WCXL'      => 'XL Specialty Insurance Company',
//WIAA
    'SU4AIG'    => 'American International Group',
    'SU4PE'     => 'ACE: Pacific Employers Insurance Company',
    'SU4E'      => 'Employers Insurance Group',
    'SU4C'      => 'CNA Insurance Group',
    '72254612'  => 'Hartford Casualty Insurance Company',
    'SU4H'      => 'Hartford Fire Insurance Company',
    '153362'    => 'Safeco Insurance Company',
    '0CRX81'    => 'Travelers Insurance Company',
    'SU4M'      => 'Metropolitan Direct P&C Ins. Co. (MetLife Auto & Home)',
  );
  /*MONTH CODES*/
  $month_arr = array(
    '01' => 'January',
    '02' => 'February',
    '03' => 'March',
    '04' => 'April',
    '05' => 'May',
    '06' => 'June',
    '07' => 'July',
    '08' => 'August',
    '09' => 'September',
    '10' => 'October',
    '11' => 'November',
    '12' => 'December',
  );
  /*DAY CODES*/
  $day_arr = array( '01' => '1',
    '02' => '2',
    '03' => '3',
    '04' => '4',
    '05' => '5',
    '06' => '6',
    '07' => '7',
    '08' => '8',
    '09' => '9',
    '10' => '10',
    '11' => '11',
    '12' => '12',
    '13' => '13',
    '14' => '14',
    '15' => '15',
    '16' => '16',
    '17' => '17',
    '18' => '18',
    '19' => '19',
    '20' => '20',
    '21' => '21',
    '22' => '22',
    '23' => '23',
    '24' => '24',
    '25' => '25',
    '26' => '26',
    '27' => '27',
    '28' => '28',
    '29' => '29',
    '30' => '30',
    '31' => '31',
  );
?>