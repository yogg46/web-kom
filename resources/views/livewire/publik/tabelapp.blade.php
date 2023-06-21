<div>
    <div class="faq-section faq-section-1 ">
        <div class="faq-section-wrapper">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="faq-wrapper">
                            <div class="faq" id="faq-accordion">
                                <div class="table-responsive"> <!-- Add a wrapper div with class "table-responsive" -->

                                <table class="table responsive   table-hover">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 15px; width: 5%;">No</th>
                                            <th style="font-size: 15px">Nama Aplikasi</th>
                                            <th style="font-size: 15px">OPD</th>
                                            <th style="font-size: 15px">Status</th>
                                            <th style="font-size: 15px; width: 5%;"></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                        $no =1;
                                        @endphp
                                        @foreach ($app as $item)
                                        <tr>
                                            <td style="font-size: 13px; width: 5%; text-align: center;">{{ $no++ }}</td>
                                            <td style="font-size: 13px">{{ $item->nama_aplikasi }}</td>
                                            <td style="font-size: 13px">{{ $item->R_OPD->nama_opd }}</td>
                                            <td style="font-size: 13px">

                                                @if (isset($item->status_projek))

                                                @if ($item->status_projek == 'Selesai')
                                                {{ $item->status_aplikasi }}
                                                @else
                                                {{ $item->status_projek }}

                                                @endif
                                                @else
                                                {{ $item->status_aplikasi }}

                                                @endif</td>
                                            <td style="font-size: 13px; width: 5%;">
                                                <a href="{{ route('app-publik',$item->slug) }}" class="circle"
                                                    style="background-color: #03c4ff;border-radius:50%;width: 15px;height: 15px;display: flex; justify-content: center; align-items: center;">
                                                    <i class="las la-angle-right hover text-white"></i>
                                                </a>
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
