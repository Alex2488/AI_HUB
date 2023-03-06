<x-layout>

       <section id="breadcrumb_section"
                class="breadcrumb_section bg_gradient_blue deco_wrap d-flex align-items-center text-white clearfix">
           <div class="container">
               <div class="breadcrumb_content text-center decrease_size" data-aos="fade-up" data-aos-delay="100">
                   <h1 class="page_title mb-30">
                       Всі AI сервіси
                   </h1>
                   <div class="breadcrumb_nav ul_li_center">
                       <ul class="clearfix">
                           <li>
                               <a href="{{url('/')}}">Головна</a>
                           </li>
                           <li>
                               Всі AI сервіси
                           </li>
                       </ul>
                   </div>
               </div>
           </div>

           <div class="deco_image spahe_1" data-aos="fade-down" data-aos-delay="300">
               <img src="{{url('/')}}/assets/images/shapes/shape_1.png" alt="spahe_not_found">
           </div>
           <div class="deco_image spahe_2" data-aos="fade-up" data-aos-delay="400">
               <img src="{{url('/')}}/assets/images/shapes/shape_2.png" alt="spahe_not_found">
           </div>
       </section>

       <!-- job_section - start
               ================================================== -->
       <section id="job_section" class="job_section sec_ptb_120 bg_gray clearfix">
           <div class="container">

               <div class="section_title decrease_size mb-30  d-flex justify-content-between" data-aos="fade-up"
                    data-aos-delay="100">
                   <h2 class=" title_text mb-0">Всі AI сервіси</h2>
                   <a href="{{route('add-service')}}" class="btn btn_border float-right">Додати сервіс
                   </a>
               </div>


               <div class="button-group filter-btns-group ul_li mb-30" data-aos="fade-up" data-aos-delay="200">
                   <ul class="clearfix">
                       <li>
                           <button class="active" data-filter="*">Всі категорії</button>
                       </li>
                       <li>
                           <button data-filter=".category-1">Текст</button>
                       </li>
                       <li>
                           <button data-filter=".category-2">Картинка</button>
                       </li>
                   </ul>
               </div>

               <div class="jobs_grid element_grid">

                   @foreach($dataServices as $dataService)

                       <div class="element-item category-{{$dataService -> category_id}}" data-category="category-{{$dataService -> category_id}}">
                           <div data-aos="fade-up" data-aos-delay="300">
                               <div class="job_item clearfix d-flex align-items-center">
                                   <div class="item_icon">
                                       <img src="assets/images/icons/jobs/icon_1.png" alt="image_not_found">
                                   </div>
                                   <div class="item_content">
                                       <h3 class="item_title"><a href="{{url('/')}}/services/{{$dataService -> slug}}">{{$dataService->title}}</a></h3>
                                       <p class="mb-0">{{$dataService -> excerpt}}</p>
                                   </div>
                                   <div class="item_button d-flex">
                                       <a href="{{route('edit-service', $dataService)}}" type="button" class="edit">
                                           <i class="fas fa-edit icon_blue"></i>
                                       </a>
                                       <form method="POST" action="{{ route('delete-service', $dataService->id) }}">
                                           @csrf
                                           <input name="_method" type="hidden" value="DELETE">
                                           <a type="submit" class="delete show_confirm" data-title-service="{{$dataService->title}}" data-toggle="tooltip" title='Delete'><i class="fas fa-trash icon_blue"></i></a>
                                       </form>


                                   </div>
                               </div>
                           </div>
                       </div>

                   @endforeach


               </div>

           </div>
       </section>
       <!-- job_section - end
       ================================================== -->

       <!-- Modal -->
       <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel">Видалення сервісу</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-footer">
                       <form id="delete-form" method="post">
                           @csrf
                           @method ('DELETE')

                           <button type="button" class="btn btn-danger btn-exit " data-dismiss="modal">No</button>

                           <span class="text-right">
                <button type="button" class="btn btn-primary btn-delete" data-dismiss="modal" >Yes</button>
            </span>
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <!-- End Modal -->


</x-layout>
