<section id="slider"><!--slider-->

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div id="slider-carousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#slider-carousel" data-slide-to="1"></li>
                        <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>FizzBo</span></h1>
                                <h2>Online E-Commerce Shopping</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset("assets")}}/images/home/slider-image.jpeg" class="girl img-responsive"
                                     style="width:600px; height:500px;"/>
                            </div>
                        </div>

                        @foreach($sliderdata as $rs)
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>FizzBo</span></h1>
                                    <h2>{{$rs->title}}</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </p>
                                    <a href="{{route('product',['id'=>$rs->id])}}" class="btn btn-default get"> BUY </a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{Storage::url($rs->image)}}" class="girl img-responsive"
                                         style="width:600px; height:500px;"/>
                                    <img src="{{asset("assets")}}/images/home/pricing.png" class="pricing" alt=""/>
                                </div>
                            </div>
                        @endforeach

                    </div>


                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>

</section><!--/slider-->





