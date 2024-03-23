@extends('layouts-site.master')
@section('title')
    {{ trans('Grades_trans.title_page') }}
@stop






  <!-- ***** Header Area Start ***** -->

  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  @section('content')
  <section class="main-banner" id="Home1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Welcome to Readers Family</h6>
            <h2> where everyone is a reader because readers are leaders and leaders are  <em>readers</em></h2>
            <div class="main-button-gradient">
              <div class="scroll-to-section"><a href="tps://we.me/+249922224499">Contact us at WhatsApp</a></div>
            </div>
          </div>
        </div>
       
           <div class="col-lg-6"> 
           <div class="right-image">
            <img src="{{ URL::asset('web/assets/images/100.png') }}" alt="">
            
          </div>
          

         

          {{-- END LINE IMGE --}}
        </div>
      </div>
    </div>
  </section>
 

 


  <section class="our-courses" id="section1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h6>Our word</h6>
            <h4>Welcome to the Foundation<em>Readers </em></h4>
            <p>A distinctive study environment</p>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="tabs">
              <div class="row">
                <div class="col-lg-3">
                  <div class="menu">
                    <div class="gradient-border "><span>Our word</span></div>
                    <div class="gradient-border active "><span>Our vision</span></div>
                    <div class="gradient-border"><span>Our message</span></div>
                    <div class="gradient-border"><span>Our goals</span></div>
                  </div>
                </div>
                <div class="col-lg-9">
                  <ul class="nacc" style="height: 822px;">
                    <li class="">
                      <div>
                        {{-- <div class="left-image">
                          <img src="{{ URL::asset('web/assets/images/courses-01.jpg') }}" alt="">
                          <div class="price"><h6>$128</h6></div>
                        </div> --}}
                        <div >
                          <h4>Education is everyone's responsibility</h4>
                          <p>Dear families:</br> Partners in the educational process</br>
                            You know that today we live in a rapidly changing world, a world different from the world we lived in when we were young, and without a doubt, what is coming will be more different from what it is now, and from here comes the difficulty of the task of education, which is to prepare a generation for a time with unknown data and challenges, and let us know. Our children were created for a time other than ours, which urgently calls us to think about the future and try to prepare generations to deal with it. This matter requires a scientific methodology capable of employing the present and trying to shape the future to instill values and morals, as education is everyone’s responsibility.
                          </p>
                         
                        {{-- </div>
                      </div> --}}
                    </li>
                    <li class="active">
                      <div>
                        <div class="left-image">
                          <img src="{{ URL::asset('web/assets/images/9.jpg') }}" alt="" style="
                          width: 28%;
                      ">
                          
                        </div>
                        <div class="right-content">
                          <h4>Our vision</h4>
                          <p>The unique institution...and the first choice in public education for parents</p>
                          {{-- <span>48 Hours</span>
                          <span>6 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div> --}}
                        </div>
                      </div>
                    </li>
                    <li class="">
                      <div>
                        <div class="left-image">
                          <img src="{{ URL::asset('web/assets/images/19.jpg') }}" alt="" style="
                          width: 62%;
                          height: 270px;
                      ">
                        </div>
                        <div class="right-content">
                          <h4>Our message</h4>
                          <p>An innovative and stimulating educational institution... working in the field of public education... using advanced technology and quality standards in a safe and sound environment with qualified cadres in full integration and cooperation with partners on a solid foundation of mutual trust.</p>
                          {{-- <span>28 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">1 Certificate</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div> --}}
                        </div>
                      </div>
                    </li>
                    <li class="">
                      <div>
                        <div class="left-image">
                          <img src="{{ URL::asset('web/assets/images/15.jpg') }}" alt="" style="
                          width: 66%;
                          height: 393px;
                      ">
                          
                        </div>
                        <div class="right-content">
                          <h4>Our goals</h4>
                          <p>1-Employee development.</br>
                            2-Providing a safe, comfortable and attractive business and school environment.</br>
                            3-Using the latest technology.</br>
                            4-Create smart partnerships.</br>
                            5-Making profits.</br>
                            6-Achieving academic excellence for students.</br>
                            7-Consolidating educational values.</br>
                            8-Building quality and excellence systems.</p>
                          {{-- <span>48 Hours</span>
                          <span>4 Weeks</span>
                          <span class="last-span">2 Certificates</span>
                          <div class="text-button">
                            <a href="contact-us.html">Subscribe Course</a>
                          </div> --}}
                        </div>
                      </div>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
{{-- end --}}

<section class="our-courses" id="Exhibition">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h4>Exhibition Imges<em>Readers </em></h4>
        </div>
      </div>
 <!-- Image Gallery section all image in one div -->
 <div class="gallery">
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/1.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item"> 
    <img src="{{ URL::asset('web/assets/images/3.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/2-3.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/4.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/2-4.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/2.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/80.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/6.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/7.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/8.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/9.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/10.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/5.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/46.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/47.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <div class="gallery-item">
    <img src="{{ URL::asset('web/assets/images/54.jpg') }}" alt="description of picture 1" onclick="openModal(this.src)" />
  </div>
  <!-- Add more images as needed -->
</div>

<!-- Modal for displaying images -->
<div id="myModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img id="modalImage" class="modal-content" />
</div>
    </div>
  </div>
</section>
{{-- end --}}
 <!-- ***** Main Banner Area Start ***** -->

 <section class="our-courses" id="Exhibition1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <div class="section-heading">
          <h4>Exhibition Vidoes<em>Readers </em></h4>
        </div>
      </div>
  <div class="video-gallery">
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/8.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/2.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/4.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/5.mp4') }}" type="video/mp4">
      </video>
    </div>
   
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/3.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/9.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/6.mp4') }}" type="video/mp4">
      </video>
    </div>
    <div class="video-item">
      <video class="video" onclick="playVideo(this)">
        <source src="{{ URL::asset('web/assets/images/7.mp4') }}" type="video/mp4">
      </video>
    </div>
  
    <!-- Add more video items as needed -->
  </div>
</div>
</div>
</section>
  <!-- ***** Main Banner Area End ***** -->

<section class="simple-cta">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 offset-lg-1">
        <div class="left-image">
          <img src="{{ URL::asset('web/assets/images/52.jpg') }}" alt="">
        </div>
      </div>
      <div class="col-lg-5 align-self-center">
        <h6>Comprehensive specialized nursery</br>
          More than one place to take care of your children
          </h6>
        <h4> will give them greater happiness</h4>
        <p>We give them every moment a greater amount of happiness so they can live their childhood in its beautiful spirit
          Preparing children well for kindergarten.</br>
          Baraa Nursery kills boredom and satisfies your children's desires
        </p>
        <p>Baraa Center for Happy Childhood</br>
          Treating your children is an art and we are good at it</br>
          
          1-We have all educational, recreational and educational activities for children, provided for each age stage separately</br>
          2-Camera surveillance</br>
          3-Helping the child to innovate</br>
          4-Discovering and developing the child’s talents and inclinations</br>
          5-Various exercises</br>
          6-Teachers with extensive experience</p>
        {{-- <div class="white-button">
          <a href="contact-us.html">View Courses</a>
        </div> --}}
      </div>
    </div>
  </div>
</section>
{{-- dssdsd --}}

<section class="services" id="LATEST">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h6>latest news</h6>
          <h4>school <em>Readers</em></h4>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-service-item owl-carousel">
          <div class="item">
            <div class="service-item">
              
              <div class="video-item">
                <video class="video" onclick="playVideo(this)" style="
                width: 150;
                margin: 0px 39px;
            ">
                  <source src="{{ URL::asset('web/assets/images/10.mp4') }}" type="video/mp4" >
                </video>
              </div>
              <p>“مدارس ريدرز لجنوب السودان 🇸🇸 فرع المهندسين 
                مدرسة القراء الدولية فرع المهندسين استمع إلى:
                المهندس الكبير الاستاذ ين ثريل الذي عزته وثقته تفوق الوصف واللغوي الاستاذ سيمون ماديت جورج كيل وعصام رحمة الله مدرس قسم اللغة العربية RIS
                القراء قادة والقادة قراء!!!”</p>
              
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/0-1.jpg') }}" alt="">
              </div>
             
             
              <p>اليوم الحادي عشر من رمضان... 
                ..شال النوار ظلل بيتنا....... في دار الأخ خضر  صديق  الدرديري وحرمه المصون مدام دكتورة رباب جعفر....والأستاذة الفاضلة هبة صديق شقيقة الأخ خضر.  .. تم تناول وجبة إفطار رمضان بحضور كوكبة  من أسرة مدارس ريدرز العالمية لجنوب السودان..وذلك في إطار الترابط الأسري والاجتماعي وزادت السعادة بأن تزامن مع الإحتفال العالمي لعيد الأم...
               ...نتمنى أن تتواصل الأفراح دوما في مجتمع مدارس ريدرز العالمية لجنوب السودان....
               ..نكرر الشكر والتقدير للأخ خضر صديق الدرديري واسرته الكريمة علي حسن الضيافة والحفاوة التي أكدت أصالة معدنهم وحسن استقبالهم.....ودمتم في حفظ الله ورعايته....</p>
             
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <video class="video" onclick="playVideo(this)">
                <source src="{{ URL::asset('web/assets/images/0-2.mp4') }}" type="video/mp4" >
              </video>
             
              <p>عيد أم سعيد من قسم KG لدينا..</p>
              
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/0-3.jpg') }}" alt="">
              </div>
              <p>تعرفوا على السيد سيمون ماديت جورج كيل جاتويتش بان-دوب، أحد أفضل مدرسي الدين المسيحي واللغة الإنجليزية لدينا.
                القراء قادة والقادة قراء!!</p>
            
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/52.jpg') }}" alt="" style="
                width: 214px;
                height: 202px;
                margin: 0px 1px;
            ">
              </div>
              <p>في RIS، نحن نجعل أمن طفلك وصحته أهم أولوياتنا!!!.</p>
             
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/0-4.jpg') }}" alt="">
              </div>
              <p>رمضان كريم</p>
           
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/0-5.jpg') }}" alt="">
              </div>
              <p>بشرى  سارة💥💥💥
                🔸مدارس ريدرز العالمية بالقاهرة قسم المهندسين🔸
       بمناسبة  الإفتتاح  تعلن عن تقديم حصص مجانية  للغة الإنجليزية واللغة العربية ،،يقدم الحصص كل من.....
      ✨ الكاتب  والاديب مستر وريال بالوانق..مدير عام مدارس ريدرز العالمية....(اللغة الإنجليزية)⚡
      ✨مستر اسامة عبدالله  مختص اللغة العربية،، وخبير التخطيط بمدارس ريدرز⚡
      تقام الحصص يوم الاحد 3/3/2024  ابتداءا العاشرة
       صباحا  حتى الخامسة مساء ... والدعوة عامة 🎗🎗
      سارع بحجز مقعدك في مدارس ريدرز ،،الفرص محدودة💫💫
      الأرقام 01127104498 - 01118142888 - 01507500231</p>
             
            </div>
          </div>
        
          
        </div>
      </div>
    </div>
  </div>
</section>

{{-- SSFS --}}

<section class="services" id="teachers">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h6>Our Teachers</h6>
          <h4>We Specialize In Sustaining <em>Excellence</em></h4>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-service-item owl-carousel">
         
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/22.jpg') }}" alt="">
              </div>
              <h4>wirial baluang</h4>
              <p>head teacher and english's teacher</p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/42.jpg') }}" alt="">
              </div>
              <h4>vaulo</h4>
              <p>agent school</p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/37.jpg') }}" alt="">
              </div>
              <h4>najla</h4>
              <p>arabic and islamic educati0n</p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/38.jpg') }}" alt="">
              </div>
              <h4>wala mosadig</h4>
              <p>english's teacher and islamic</p>
              <div class="social-sharing" >
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/14.jpg') }}" alt="" >
              </div>
              <h4>kulang bulang </h4>
             
              <p>math's teache</p>
              <div class="social-sharing" tyle="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
           <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/18.jpg') }}" alt=""
            >
              </div>
              <h4>Technology</h4>
              <p>english</p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/13.jpg') }}" alt="">
              </div>
              <h4>steven madoski</h4>
              <p>english's language teacher</p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/17.jpg') }}" alt="">
              </div>
              <h4>sijin eng yein</h4>
              <p>physics's teacher</p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
         
         
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/39.jpg') }}" alt="">
              </div>
              <h4>hiba sedig</h4>
              <p></p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/40.jpg') }}" alt="">
              </div>
              <h4>john sampa</h4>
              <p>geography's teacger </p>
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
              <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="service-item">
              <div class="icon">
                <img src="{{ URL::asset('web/assets/images/41.jpg') }}" alt="">
              </div>
              <h4>issam</h4>
              <p>head teacher of arabic section</p>
            
              <div class="social-sharing" style="
              margin: 10px 57px;
          ">
                <ul>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-facebook"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook"> <i class="fa fa-whatsapp"></i></a></li>
               <li><a href="#" title="Share on Facebook" class="facebook">  <i class="fa fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>

            
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
{{-- SFFS --}}



  <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div id="map">
          
            <!-- You just need to go to Google Maps for your own map point, and copy the embed code from Share -> Embed a map section -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462.0134206813668!2d31.337465947812152!3d30.120494505453628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815cf59d1f2b7%3A0xd9e6b96c2017a2ec!2s36%20Mohammed%20Ezat%20Tamom%2C%20AZ%20Zahraa%20WA%20Masaken%20Al%20Helmeyah%2C%20Ain%20Shams%2C%20Cairo%20Governorate%204542351!5e0!3m2!1sen!2seg!4v1710827769876!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             <div class="row">
              <div class="col-lg-4 offset-lg-1">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Phone</h4>
                  <span>+201012882691</span>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-info">
                  <div class="icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <h4>Mobile</h4>
                  <span>+201507500231</span>
                </div>
              </div>
            </div> 
          </div>
        </div>
        <div class="col-lg-4">
          <form id="contact"  action="{{ route('contact.store') }}" method="POST">
          @csrf
            
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Contact us</h6>
                 
                </div>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="number" name="mobile" id="name" placeholder="The Phone" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" id="message" placeholder="Your Message"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-gradient-button">Send Message</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-12">
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/profile.php?id=100083325493065&mibextid=JRoKGi"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="tps://we.me/+249922224499"><i class="fa fa-whatsapp"></i></a></li>
          </ul>
        </div>
        @include('layouts-site.footer')
       
      </div>
     
    </div>
  </section>

  @endsection
  <script>
    // Open the Modal
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>