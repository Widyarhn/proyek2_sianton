
{{-- <div class="container" data-aos="fade-up">
    
    <div class="section-title">
        <h2>Jadwal Praktek</h2>
    </div>
    
    <div class="row" style="justify-content: center">
        
        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
                @if (empty($jadwalpraktik))
                <div class="alert alert-danger text-center">
                    <strong>
                        <i>
                            Data Jadwal Praktek Belum Ada
                        </i>
                    </strong>
                </div>
                @else
                {!! $jadwalpraktik->text !!}
                @endif
                
            </div>
        </div>
        
        
    </div>
    
</div> --}}


<div class="container" data-aos="fade-up">
    
    <div class="section-title">
        <h2>Jadwal Praktek</h2>
    </div>
    
    <div class="row" style="justify-content: center">
        
        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured" style="padding-top: 0px;padding-bottom: 50px;padding-right: 0px;padding-left: 0px;">
                @if (empty($jadwalpraktik))
                <br>
                <div class="alert alert-danger text-center">
                    <strong>
                        <i>
                            Data Jadwal Praktek Belum Ada
                        </i>
                    </strong>
                </div>
                @else
                <div class="row" style="justify-content: center">
                    <div class="col-lg-4" style="width: 100px;text-align: center;">
                        <i class="bi bi-clock" style="font-size:60px"></i> 
                    </div>
                    <div class="col-lg-4" style="margin-top:9px" >
                        {!! $jadwalpraktik->text !!}
                    </div>
                </div>
                @endif
                
            </div>
        </div>
        
        
    </div>
    
</div>

