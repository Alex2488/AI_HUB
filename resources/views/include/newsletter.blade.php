<!-- newsletter_section - start
				================================================== -->
<section id="newsletter_section" class="newsletter_section text-white clearfix mt-5">
    <div class="container">
        <div class="newsletter_boxed p-60 bg_gradient_blue deco_wrap" data-aos="fade-up" data-aos-delay="100">

            <div class="row align-items-center justify-content-lg-between justify-content-md-center">
                <div class="col-lg-5 col-md-7">
                    <div class="section_title decrease_size text-center">
                        <h2 class="title_text mb-15">Підпишись</h2>
                        <p class="mb-0">
                            на новини від AI-HUB<span class="d-block">та скористайся новими інструментами першим.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-7">
                    <form id="subscribe" action="{{route('submit-subscriber')}}" method="post">
                        @csrf
                        <div class="form_item mb-0">
                            <input class="text-left" type="email" name="email" placeholder="Введіть ваш email">
                        </div>
                    </form>
                </div>

                <div class="col-lg-2 col-md-12">
                    <button type="submit" form="subscribe" class="btn btn_border border_white float-right">Підписатись</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- newsletter_section - end
================================================== -->
