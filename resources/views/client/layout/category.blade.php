@inject('category','App\Category')
  <section class="grid-info-section">
        <div class="container">
            <h3 class="tittle">Best Seller</h3>
            <div class="row inner-sec">
                <ul id="flexiselDemo1">
                  @foreach ($category->getCategory() as $cat)
                    <li>
                        <div class="blog-item text-center">
                            <img src="{{asset('upload/'.$cat->cat_img)}}" alt=" " class="img-fluid rounded-circle" />
                            <div class="floods-text">
                                <h3><a href="/Productlist/{{$cat->cat_id}}">{{$cat->cat_nm}}</a></h3>
                            </div>
                        </div>
                    </li>
                  @endforeach
                </ul>
            </div>
        </div>
  </section>
