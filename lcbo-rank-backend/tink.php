<?php

use Illuminate\Support\Facades\Http;

dump(Http::withHeaders([
    'UA' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
    'Accept-Encoding' => 'gzip, deflate, br',
    'Accept-Language' => 'en-US,en;q=0.9',
    'Cookie' => 'lcbo-locator-storage={}; mage-banners-cache-storage={}; selectedStoreLang=English; form_key=WlF8d97ypvERyqdc; BVBRANDID=b2d085a2-9eb8-4556-b86b-a8ab5ffdd58f; _gid=GA1.2.2044673500.1686945032; coveo_visitorId=4a54c1ad-8196-d56e-0a09-7251d2e52767; mdLogger=false; PHPSESSID=a4cd609150f8f8e46ed575c5ad1262cf; PHPSESSID=a4cd609150f8f8e46ed575c5ad1262cf; form_key=WlF8d97ypvERyqdc; _ga_HH23XDN489=GS1.1.1687010850.2.0.1687010850.0.0.0; mage-cache-storage={}; mage-cache-storage-section-invalidation={}; mage-cache-sessid=true; mage-messages=; recently_viewed_product={}; recently_viewed_product_previous={}; recently_compared_product={}; recently_compared_product_previous={}; product_data_storage={}; mg_dnt=true; BVBRANDSID=bf06f620-423b-4d8c-8769-b760648d2951; _ga=GA1.2.909403409.1686945032; _gat_gtag_UA_553500_44=1; QueueITAccepted-SDFrts345E-V3_2020pandemic=EventId%3D2020pandemic%26QueueId%3D4fd1688d-2e4c-40ab-b8f6-c54fe734ec92%26RedirectType%3Dsafetynet%26IssueTime%3D1687010850%26Hash%3Dd2ca62bc5de911169adb78ed46b7661e7295cf9bb1bde5862b8f04f15d9e2632; AMCVS_744DE3BC55897A577F000101%40AdobeOrg=1; AMCV_744DE3BC55897A577F000101%40AdobeOrg=1176715910%7CMCIDTS%7C19525%7CMCMID%7C11468554485893745384201329130207915219%7CMCAAMLH-1687615651%7C7%7CMCAAMB-1687615651%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCOPTOUT-1687018051s%7CNONE%7CvVersion%7C5.4.0; s_gpv=homepage; s_ips=708; s_ppv=homepage%2C16%2C16%2C708%2C1%2C6; pageLoadAverage=4.4%3A1; s_nr30=1687010851117-Repeat; s_cc=true; private_content_version=bbec8faba77e35e1cf288e49f36c8ab5; s_tp=4415; site24x7rumID=3470196214490.1687010846401.1687010846401; kampyleUserSession=1687010851822; kampyleUserSessionsCount=12; kampyleSessionPageCounter=1; kampyleUserPercentile=21.993016375407827; section_data_ids={}',
    'Sec-Ch-Ua-Platform:' => 'macOS',
])->get('https://www.lcbo.com/en/bud-light-1107')->status());
