<aside class="sidebar-shop sidebar-filter">
    <div class="sidebar-filter-wrapper">
        <div class="widget widget-clean">
            <label><i class="icon-close"></i>Filters</label>
            <a href="#" class="sidebar-filter-clear">Clean All</a>
        </div><!-- End .widget -->
        <div class="widget widget-collapsible">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                    Category
                </a>
            </h3><!-- End .widget-title -->

            <div class="collapse show" id="widget-1">
                <div class="widget-body">
                    <div class="filter-items filter-items-count">
                        <?php $Category = DB::table('category')->get(); ?>
                        @foreach ($Category as $item)
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cat-{{$item->id}}">
                                <label class="custom-control-label" for="cat-{{$item->id}}">{{$item->cat}}</label>
                            </div><!-- End .custom-checkbox -->
                            <span class="item-count"><?php echo count($ProductCount = DB::table('product')->where('cat',$item->id)->get()) ?></span>
                        </div><!-- End .filter-item -->
                        @endforeach
                       

                    </div><!-- End .filter-items -->
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->

       



        <div class="widget widget-collapsible">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-4" role="button" aria-expanded="true" aria-controls="widget-4">
                    Brand
                </a>
            </h3><!-- End .widget-title -->

            <div class="collapse show" id="widget-4">
                <div class="widget-body">
                    <div class="filter-items">

                        <?php $Brand = DB::table('brands')->get(); ?>
                        @foreach ($Brand as $item)
                        <div class="filter-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brand-{{$item->name}}">
                                <label class="custom-control-label" for="brand-{{$item->name}}">{{$item->name}}</label>
                            </div><!-- End .custom-checkbox -->
                        </div><!-- End .filter-item -->
                        @endforeach
                        
                    </div><!-- End .filter-items -->
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->

        <div class="widget widget-collapsible">
            <h3 class="widget-title">
                <a data-toggle="collapse" href="#widget-5" role="button" aria-expanded="true" aria-controls="widget-5">
                    Price
                </a>
            </h3><!-- End .widget-title -->

            <div class="collapse show" id="widget-5">
                <div class="widget-body">
                    <div class="filter-price">
                        <div class="filter-price-text">
                            Price Range:
                            <span id="filter-price-range"></span>
                        </div><!-- End .filter-price-text -->

                        <div id="price-slider"></div><!-- End #price-slider -->
                    </div><!-- End .filter-price -->
                </div><!-- End .widget-body -->
            </div><!-- End .collapse -->
        </div><!-- End .widget -->
    </div><!-- End .sidebar-filter-wrapper -->
</aside><!-- End .sidebar-filter -->