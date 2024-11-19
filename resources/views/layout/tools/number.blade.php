
@php
    use App\Models\Number;
    use Illuminate\Http\Request;

    $indo = Number::firstWhere('company','=','INDO');
    $ibb = Number::firstWhere('company','=','IBB');
    $iwp = Number::firstWhere('company','=','IWP');
@endphp



<!-- notification start here -->

<button class="popup-button" onclick="openPopup()"><i class="fa-brands fa-whatsapp boxx"></i></button>

  <div class="popup-container" id="popupContainer">
      <div class="popup-content bg-popup">
        <div class=" row">
          <!-- <span class="close-button warp-right" onclick="closePopup()">&times;</span> -->
        </div>
          <div class="row head">

                  <div class="col">
                    <div class="">
                      <p>Hello,</p>
                      <span class="close-button warp-right" onclick="closePopup()">&times;</span>
                    </div>

                    <div class="box">
                    <i class="fa-solid fa-headset" style="color: #24369d; font-size: 2.5em; padding-left: 5px;padding-top: 5px;"></i>
                  </div>
                  <h5>Need to speak with us ?</h5>
                  <a href="{{ route('customer-center') }}">Contact us</a>
                  </div>

          </div>

          <div class="detail-box">

            <table class="table" style="border-top: 2px solid #24369d;">
              <tbody>
                <tr>
                  <th scope="row"> <i class="fa-solid fa-phone"></i> </th>
                  <td>PT. Ispat Indo <br>  <a class="" href="https://web.whatsapp.com/send?phone={{$indo->number ?? '628155152222'}}&text=Hi%2c%20Ispatindo.com">{{$indo->number ?? 'NO INFORMATION'}}</a> </td>
                </tr>
                <tr style="border-top: 2px solid #24369d;">
                  <th scope="row"> <i class="fa-solid fa-phone"></i> </th>
                  <td>PT. Ispat Indo <br>  <a class="" href="https://web.whatsapp.com/send?phone={{$ibb->number ?? '628155152222'}}&text=Hi%2c%20Ispatindo.com">{{$ibb->number ?? 'NO INFORMATION'}}</a> </td>
                </tr>
                <tr style="border-bottom: 2px solid #24369d; border-top: 2px solid #24369d;">
                  <th scope="row"> <i class="fa-solid fa-phone"></i> </th>
                  <td>PT. Ispat Indo <br>  <a class="" href="https://web.whatsapp.com/send?phone={{$iwp->number ?? '628155152222'}}&text=Hi%2c%20Ispatindo.com">{{$iwp->number ?? 'NO INFORMATION'}}</a> </td>
                </tr>
              </tbody>
            </table>

            <!-- <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Contact us here <i class="fa-solid fa-angle-down warp-right" style="color: #252525; font-size: 1.5em;"></i>
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">



                  </div>
                </div>
              </div>

            </div> -->


            <!-- <p class="warp-left">PT. Ispat Indo : <br>  <a class="" href="">+62 1234 1234 123</a> <br> <br>

              PT. Ispat Bukit baja : <br> <a class="" href="">+62 1234 1234 123</a> <br> <br>

              PT. Ispat Wire Product : <br>  <a class="" href="">+62 1234 1234 123</a> -->
          </div>
      </div>
  </div>


<!-- notification end here -->
