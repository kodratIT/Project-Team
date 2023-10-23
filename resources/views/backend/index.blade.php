@extends('backend.layouts.master')
@section('content')
     <!-- Page Header -->
     <div class="block justify-between page-header md:flex">
        <div>
            <h3 class="text-gray-700 hover:text-gray-900 dark:text-white dark:hover:text-white text-2xl font-medium"> Dashboard</h3>
        </div>
        <ol class="flex items-center whitespace-nowrap min-w-0">
            <li class="text-sm">
              <a class="flex items-center font-semibold text-primary hover:text-primary dark:text-primary truncate" href="javascript:void(0);">
                Home
                <i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 dark:text-gray-300 rtl:rotate-180"></i>
              </a>
            </li>
            <li class="text-sm text-gray-500 hover:text-primary dark:text-white/70 " aria-current="page">
                Dashboard
            </li>
        </ol>
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="grid grid-cols-12 gap-x-5">
      <div class="col-span-12 md:col-span-6 xxl:col-span-3">
        <div class="box overflow-hidden">
          <div class="box-body">
            <div class="flex">
              <div class="flex space-x-3 rtl:space-x-reverse">
                <div class="avatar p-2 rounded-sm bg-primary/10">
                  <svg class="fill-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                    viewBox="0 0 24 24">
                    <path class="fill-primary"
                      d="M9,10h2.5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,9,11.5,9H10V8c0-0.276123-0.223877-0.5-0.5-0.5S9,7.723877,9,8v1c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2h1c0.5523071,0,1,0.4476929,1,1s-0.4476929,1-1,1H7.5C7.223877,15,7,15.223877,7,15.5S7.223877,16,7.5,16H9v1.0005493C9.0001831,17.2765503,9.223999,17.5001831,9.5,17.5h0.0006104C9.7765503,17.4998169,10.0001831,17.276001,10,17v-1c1.1045532,0,2-0.8954468,2-2s-0.8954468-2-2-2H9c-0.5523071,0-1-0.4476929-1-1S8.4476929,10,9,10z M21.5,12H17V2.5c0.000061-0.0875244-0.0228882-0.1735229-0.0665283-0.2493896c-0.1375732-0.2393188-0.4431152-0.3217773-0.6824951-0.1842041l-3.2460327,1.8603516L9.7481079,2.0654297c-0.1536865-0.0878906-0.3424072-0.0878906-0.4960938,0l-3.256897,1.8613281L2.7490234,2.0664062C2.6731567,2.0227661,2.5871582,1.9998779,2.4996338,1.9998779C2.2235718,2.000061,1.9998779,2.223938,2,2.5v17c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5H19c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5006104C21.9998169,12.2234497,21.776001,11.9998169,21.5,12z M4.5,21c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V3.3623047l2.7412109,1.5712891c0.1575928,0.0872192,0.348877,0.0875854,0.5068359,0.0009766L9.5,3.0761719l3.2519531,1.8583984c0.157959,0.0866089,0.3492432,0.0862427,0.5068359-0.0009766L16,3.3623047V19c0.0008545,0.7719116,0.3010864,1.4684448,0.7803345,2H4.5z M21,19c0,1.1045532-0.8954468,2-2,2s-2-0.8954468-2-2v-6h4V19z">
                    </path>
                  </svg>
                </div>
                <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">Total Revenue</h6>
              </div>
              <span class="badge bg-primary/10 text-primary py-1 ltr:ml-auto rtl:mr-auto !my-auto">
                <i class="ti ti-trending-up"></i> 20%
              </span>
            </div>
            <div class="mt-2">
              <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$26,35,262</h2>
              <p class="text-xs text-gray-400 ">in last week</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 md:col-span-6 xxl:col-span-3">
        <div class="box overflow-hidden">
          <div class="box-body">
            <div class="flex">
              <div class="flex space-x-3 rtl:space-x-reverse">
                <div class="avatar p-2 rounded-sm bg-secondary/10">
                  <svg class="fill-secondary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                    viewBox="0 0 24 24">
                    <path class="fill-secondary"
                      d="M9.5,7h7C16.776123,7,17,6.776123,17,6.5S16.776123,6,16.5,6h-7C9.223877,6,9,6.223877,9,6.5S9.223877,7,9.5,7z M7.5,11h9c0.276123,0,0.5-0.223877,0.5-0.5S16.776123,10,16.5,10h-9C7.223877,10,7,10.223877,7,10.5S7.223877,11,7.5,11z M20.5,2H3.4993896C3.2234497,2.0001831,2.9998169,2.223999,3,2.5v19c-0.000061,0.1124268,0.0378418,0.2216187,0.1074829,0.3098755c0.1710205,0.2167358,0.4853516,0.2537231,0.7020874,0.0827026l2.8652344-2.2617188l2.3583984,1.7695312c0.1777954,0.1328125,0.421814,0.1328125,0.5996094,0L12,19.625l2.3671875,1.7753906c0.1777954,0.1328125,0.421814,0.1328125,0.5996094,0l2.3583984-1.7695312l2.8652344,2.2617188C20.2785034,21.9623413,20.3876343,22.0002441,20.5,22h0.0006104C20.7766113,21.9998169,21.0001831,21.7759399,21,21.5V2.4993896C20.9998169,2.2234497,20.776001,1.9998169,20.5,2z M20,20.46875l-2.3574219-1.8613281c-0.0882568-0.069519-0.1972656-0.1072998-0.3095703-0.1074219c-0.1080933-0.000061-0.2132568,0.0349121-0.2998047,0.0996094L14.6669922,20.375l-2.3671875-1.7753906c-0.1777954-0.1328125-0.421814-0.1328125-0.5996094,0L9.3330078,20.375l-2.3662109-1.7753906c-0.1817017-0.1348877-0.4311523-0.1317139-0.609375,0.0078125L4,20.46875V3h16V20.46875z M7.5,15h9c0.276123,0,0.5-0.223877,0.5-0.5S16.776123,14,16.5,14h-9C7.223877,14,7,14.223877,7,14.5S7.223877,15,7.5,15z">
                    </path>
                  </svg>
                </div>
                <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">Total Sales</h6>
              </div>
              <span class="badge bg-secondary/10 text-secondary py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i
                  class="ti ti-trending-up"></i> 1.8%</span>
            </div>
            <div class="mt-2">
              <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$56,35,262</h2>
              <p class="text-xs text-gray-400 ">in last week</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 md:col-span-6 xxl:col-span-3">
        <div class="box overflow-hidden">
          <div class="box-body">
            <div class="flex">
              <div class="flex space-x-3 rtl:space-x-reverse">
                <div class="avatar p-2 rounded-sm bg-warning/10">
                  <svg class="fill-warning" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                    viewBox="0 0 24 24" id="shopping-bag">
                    <path class="fill-warning" fill="#4B5563"
                      d="M19.5,7H16V5.9169922c0-2.2091064-1.7908325-4-4-4s-4,1.7908936-4,4V7H4.5C4.4998169,7,4.4996338,7,4.4993896,7C4.2234497,7.0001831,3.9998169,7.223999,4,7.5V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h10c1.6561279-0.0018311,2.9981689-1.3438721,3-3V7.5c0-0.0001831,0-0.0003662,0-0.0006104C19.9998169,7.2234497,19.776001,6.9998169,19.5,7z M9,5.9169922c0-1.6568604,1.3431396-3,3-3s3,1.3431396,3,3V7H9V5.9169922z M19,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H7c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V8h3v2.5C8,10.776123,8.223877,11,8.5,11S9,10.776123,9,10.5V8h6v2.5c0,0.0001831,0,0.0003662,0,0.0005493C15.0001831,10.7765503,15.223999,11.0001831,15.5,11c0.0001831,0,0.0003662,0,0.0006104,0C15.7765503,10.9998169,16.0001831,10.776001,16,10.5V8h3V19z">
                    </path>
                  </svg>
                </div>
                <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">Total Products</h6>
              </div>
              <span class="badge bg-warning/10 text-warning py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i
                  class="ti ti-trending-down"></i> 1.8%</span>
            </div>
            <div class="mt-2">
              <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$4,262</h2>
              <p class="text-xs text-gray-400 ">in last week</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 md:col-span-6 xxl:col-span-3">
        <div class="box overflow-hidden">
          <div class="box-body">
            <div class="flex">
              <div class="flex space-x-3 rtl:space-x-reverse">
                <div class="avatar p-2 rounded-sm bg-success/10">
                  <svg class="fill-success" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                    viewBox="0 0 24 24">
                    <path class="fill-success"
                      d="M10.75,8H12h0.0006104H15.5C15.776123,8,16,7.776123,16,7.5S15.776123,7,15.5,7h-3V5.5C12.5,5.223877,12.276123,5,12,5s-0.5,0.223877-0.5,0.5V7h-0.75C9.2312012,7,8,8.2312012,8,9.75s1.2312012,2.75,2.75,2.75h2.5c0.9664917,0,1.75,0.7835083,1.75,1.75S14.2164917,16,13.25,16H8.5C8.223877,16,8,16.223877,8,16.5S8.223877,17,8.5,17h3v1.5c0,0.0001831,0,0.0003662,0,0.0005493C11.5001831,18.7765503,11.723999,19.0001831,12,19c0.0001831,0,0.0003662,0,0.0006104,0c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5V17h0.75c1.5187988,0,2.75-1.2312012,2.75-2.75s-1.2312012-2.75-2.75-2.75h-2.5C9.7835083,11.5,9,10.7164917,9,9.75S9.7835083,8,10.75,8z M12,1C5.9248657,1,1,5.9248657,1,12s4.9248657,11,11,11c6.0722656-0.0068359,10.9931641-4.9277344,11-11C23,5.9248657,18.0751343,1,12,1z M12,22C6.4771729,22,2,17.5228271,2,12S6.4771729,2,12,2c5.5201416,0.0064697,9.9935303,4.4798584,10,10C22,17.5228271,17.5228271,22,12,22z">
                    </path>
                  </svg>
                </div>
                <h6 class="text-lg font-medium text-gray-800 mb-2 dark:text-white my-auto">Total Expenses</h6>
              </div>
              <span class="badge bg-success/10 text-success py-1 ltr:ml-auto rtl:mr-auto !my-auto"><i
                  class="ti ti-trending-up"></i> 1.2%</span>
            </div>
            <div class="mt-2">
              <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">$35,262</h2>
              <p class="text-xs text-gray-400 ">in last week</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End::row-1 -->



@endsection
