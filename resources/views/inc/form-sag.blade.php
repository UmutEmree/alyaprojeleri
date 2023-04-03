<div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-show">
              <div class="qrt-image-frame">
                <img src="{{ asset('img/banners/banner1.jpg') }}" alt="banner">
              </div>
              <div class="qrt-overlay">
              
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">@lang('main.contact-form')</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-contact-form ">
                  <div class="row">
                  	 <form method="post"  enctype="multipart/form-data" action="{{ route('iletisim') }}">

                                {{ csrf_field () }}
                                <input type="hidden" name="utm_medium" value="{{ Request::get('utm_medium') ?? '' }}">
                                <input type="hidden" name="utm_source" value="{{ Request::get('utm_soruce') ?? '' }}">
                                <input type="hidden" name="projectName" value="{{ $project->name ?? '' }}">
                              <?php
                              $date = date('d-m-Y h:i') ?>

                             
                                <input type="hidden" name="tarih" value=" {{ date('d-m-Y h:i', strtotime($date)) }}">
                    <div class="col-lg-12">

                      <div class="qrt-form-field">
                        <input id="name" name="name" class="qrt-input" type="text" placeholder="@lang('main.name')" required="">
                        <label id="label" for="name"><i class="fas fa-user"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <input id="email" name="email" class="qrt-input" type="email" placeholder="E-mail" required="">
                        <label id="label" for="email"><i class="fas fa-at"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <input id="phone" name="phone" class="qrt-input" type="text" placeholder="@lang('main.phone')" required="">
                        <label id="label" for="phone"><i class="fas fa-phone"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <textarea id="message" name="mesaj" class="qrt-input" placeholder="@lang('main.message')" required=""></textarea>
                        <label id="label" for="message"><i class="far fa-envelope"></i></label>
                      </div>
                    </div>
                         <div class="col-md-12">
                       
                            <input type="checkbox" checked="" name="Kvkk" required="required" id="kvkk" required="Sizinle iletişime geçebilmemiz için aydınlanma metnini okuyup, ilgili alanı işaretlemeniz gerekmektedir.">
                            
                            <label for="kvkk">
                                <a href="{{route('aydinlatma')}}" style="color: #fff" target="_blank">KVK & Aydınlatma metnini  okudum.</a>
                            </label>
                       
                        </div>
                        <div class="col-md-12">
                        	
                            <input type="checkbox" checked="" name="ElectronicMessagePermissionHeaderForm"  id="ElectronicMessagePermissionHeaderForm" required="Sizinle iletişime geçebilmemiz için aydınlanma metnini okuyup, ilgili alanı işaretlemeniz gerekmektedir.">
                          
                            <label for="ElectronicMessagePermissionHeaderForm">
                               <a data-toggle="modal" data-target="#kayit" style="color: #fff; font-size: 11px" href="#"> Kampanyalardan haberdar olmak için elektronik ileti almak istiyorum.</a>
                            </label>
                   
                        </div>
                                 
                    <div class="col-md-6">
                      <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40">
                        <button class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale" type="submit"><span>@lang('main.send')</span></button>
                      </div>
                    </div>
                   </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      