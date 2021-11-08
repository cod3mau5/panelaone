<div class="pure-g">
    <div class="pure-u-24-24">
        <table>
            <tr>
                <td style="width: 33%; text-align: left;">
                    <img src="img/color_lg_big.jpg" alt="" style="height: 50px;">
                </td>
                <td style="width: 33%; text-align: center;">
                    <h4>CAPETRAVEL<BR>TRANSPORTATION VOUCHER</h4>
                </td>
                <td style="width: 33%; text-align: right;">
                    <span style="font-size: 0.7rem;">BOOKING # {{$row->book}}</span><br>
                    <span style="font-size: 0.7rem;">CONFIRMATION # 123ABC</span>
                </td>
            </tr>
        </table>
    </div>
</div>
<div class="pure-g">
    <div class="pure-u-24-24">
        <table class="pure-table" style="width: 100%;">
            <tbody>
                <tr>
                    <td>NAME</td>
                    <td colspan="3">{{$row->name}}</td>
                    <td style="text-align: right">NUMBER OF PAX</td>
                    <td>{{$row->pax}}</td>
                    <td style="text-align: right">AGENCY</td>
                    <td>{{$row->agencia->nombre}}</td>
                </tr>
                <tr>
                    <td>ARRIVAL DATE</td>
                    <td>{{strtoupper(date('M j, Y', strtotime($row->arrival_date)))}}</td>
                    <td style="text-align: right">FLIGHT</td>
                    <td>{{$row->arrival_flight}}</td>
                    <td style="text-align: right">TIME</td>
                    <td>{{date('g:i A', strtotime($row->arrival_time))}}</td>
                    <td style="text-align: right">HOTEL</td>
                    <td>{{$row->hotel->nombre}}</td>
                </tr>
                <tr>
                    <td>DEPARTURE DATE</td>
                    <td>{{strtoupper(date('M j, Y', strtotime($row->departure_date)))}}</td>
                    <td style="text-align: right">FLIGHT</td>
                    <td>{{$row->departure_flight}}</td>
                    <td style="text-align: right">TIME</td>
                    <td>{{date('g:i A', strtotime($row->departure_time))}}</td>
                    <td style="text-align: right">PICKUP TIME</td>
                    <td>{{date('g:i A', strtotime($row->pickup_time))}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<span style="text-align: center; display: block; font-weight: bold; font-size: 0.9rem;">
    KINDLY ALLOW 10 MINUTES TOLERANCE EITHER BEFORE OR AFTER THE PICK UP TIME SHOWN ABOVE
</span>
<p style="text-align: center;"><strong style="color: red;">IMPORTANT INFORMATION</strong></p>
<p style="text-align: justify; font-size: 0.8rem;">
    PLEASE MAKE SURE THE DEPARTURE INFORMATION CONTAINED ON THIS VOUCHER IS CORRECT, IF YOU SHOULD CHANGE YOUR HOTEL FLIGHT OR DATE DEPARTURE, KINDLY NOTIFY OUR OFFICE SO THAT WE CAN RESCHEDULE YOUR PICK UP TIME (72 HRS IN ADVANCE). PLEASE BE FULLY  CHECKED OUT AND BE READY BY YOUR PICK UP TIME. IF YOU FAIL TO BE THERE, <i>CAPE TRAVEL</i> WILL NOT BE LIABLE FOR YOUR TRANSPORTATION. IF OUR REPRESENTATIVE HAS NOT CONTACTED YOU AT THE ABOVE PICK UP TIME, PLEASE CALL OUR MAIN OFFICE AT THE NUMBER BELLOW.
</p>
<p style="text-align: justify;">
    <strong>
        <q>CAPE TRAVEL</q>REPRESENTS YOUR TRAVEL AGENCY LOCALY, IF YOU NEED ASSISTANCE OR HAVE ANY QUESTIONS PLEASE CALL OUR OFFICE.
    </strong>
</p>

<hr width="50%; display: block; margin: 0 auto; text-align: center; margin-top: 30px;">
<div style="text-align: center;">
    <span style="font-size: 0.7rem; font-weight: bold; display: block;">SIGNATURE</span>
    <div style="font-size: 0.8rem;">AEROPUERTO INTERNACIONAL<br>
    SAN JOSÉ DEL CABO, B.C.S. MÉXICO<br>
    PHONE 146-5393 PHONE/FAX: 146-5352<br>
    HOURS 8:00 A.M. TO 5:00 P.M. DAILY<br>
    http://www.cape-travel.com<br>
    E-mail: reservations@cape-travel.com
    </div>
</div>
<p style="text-align: center; font-size: 1.2rem; font-weight: bold;">
    <i>CAPE TRAVEL</i> WISHES YOU A PLEASANT STAY!!!
</p>