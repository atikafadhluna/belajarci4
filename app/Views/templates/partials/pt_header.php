<div id="kt_header" class="header header-fixed">

    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">

        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">


            </div>

            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->

        <!--begin::Topbar-->
        <div class="topbar">
            <div class="topbar-item">
                <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">

                    <span class=" font-weight-bolder font-size-base d-none d-md-inline mr-3"><?= session()->get('nama_panitia') ?></span>
                    <span class="symbol symbol-35 symbol-light-success">

                        <img class="h-40px w-40px rounded-sm" src="<?= base_url(); ?>/assets/media/logos/kemenag.png" alt="">
                    </span>
                </div>
            </div>
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>