<section id="mycabotransfers">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12 area">
                    <div class="selector">
                        <div id="selector-step-1" class="step selected">1</div>
                        <div id="selector-step-2" class="step">2</div>
                        <div id="selector-step-3" class="step">3</div>
                    </div>
                    <div class="title">
                        <h2>BOOK NOW</h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="row" id="step-2">
                    <form class="col-sm-12">
                        <div class="info info-container">
                            <div class="col-12">
                                <label class="zindex9">Hotel</label>
                                <input id="form-hotel" name="Hotel" placeholder="Select your hotel"/>
                            </div>
                            <div class="col-12">
                                <label>Service</label>
                                <select id="form-service" name="Service">
                                    <option data="One Way" value="One Way">One Way</option>
                                    <option data="Round Trip" value="Round Trip">Round Trip</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label>Passangers</label>
                                <select id="form-unit" name="Unit">
                                </select>
                            </div>
                            <div class="col-12" id="only-oneway">
                                <label>Departure</label>
                                <select id="form-destination" name="Destination">
                                    <option data="Airport - Hotel" value="Airport - Hotel">From Airport to Hotel</option>
                                    <option data="Hotel - Airport" value="Hotel - Airport">From Hotel to Airport</option>
                                </select>
                            </div>
                            <div class="col-12" id="capacity-shuttle">
                                <label>Pax</label>
                                <select id="form-passengers-shuttle">
                                    <option name="passengers" value="1">1 Passenger</option>
                                    <option name="passengers" value="2">2 Passengers</option>
                                    <option name="passengers" value="3">3 Passengers</option>
                                    <option name="passengers" value="4">4 Passengers</option>
                                    <option name="passengers" value="5">5 Passengers</option>
                                    <option name="passengers" value="6">6 Passengers</option>
                                    <option name="passengers" value="7">7 Passengers</option>
                                    <option name="passengers" value="8">8 Passengers</option>
                                    <option name="passengers" value="9">9 Passengers</option>
                                    <option name="passengers" value="10">10 Passengers</option>
                                    <option name="passengers" value="11">11 Passengers</option>
                                    <option name="passengers" value="12">12 Passengers    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <div class="footer-action">
                            <input class="submit-button" id="send-prebook" type="button" name="SEND" value="NEXT" disabled="disabled"/>
                        </div>
                    </div>
                </div>
                <div class="row" id="step-3">
                    <form class="col-sm-12">
                        <div class="info info-container margin-bottom-2r">
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label>Full Name</label>
                                    <input id="form-name" type="text" name="name"/>
                                </div>
                                <div class="col-sm-6 col-12">
                                    <label>Email</label>
                                    <input id="form-email" type="text" name="email"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-12">
                                    <label>Phone</label>
                                    <input id="form-phone" type="number" name="phone"/>
                                </div>
                            </div>
                            <div id="arrival" class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Arrival Date</label>
                                    <input id="form-arrival-date" type="date" name="arrivaldate"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Arrival Time</label>
                                    <input id="form-arrival-time" type="time" name="arrivaltime"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Airline</label>
                                    <input id="form-arrival-airline"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Flight #</label>
                                    <input id="form-arrival-flight" type="text" name="arrivalflight" placeholder="Flight"/>
                                </div>
                            </div>
                            <div id="departure" class="row">
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Departure Date</label>
                                    <input id="form-departure-date" type="date" name="departuredate"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Departure Time</label>
                                    <input id="form-departure-time" type="time" name="departuretime"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Airline</label>
                                    <input id="form-departure-airline"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-12">
                                    <label>Flight #</label>
                                    <input id="form-departure-flight" type="text" name="departureflight" placeholder="Flight"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>Requirements</label>
                                    <input id="form-comment" name="comments" placeholder="Baby seat, booster seat, grocery stop, etc"/>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <div class="footer-action">
                            <input class="submit-button" id="send-mail" type="button" name="SEND" value="SEND"/>
                        </div>
                    </div>
                </div>
                <div class="row" id="step-4">
                    <div class="col-sm-12">
                        <div class="info info-container margin-bottom-2r">
                            <div class="col-12">
                                <h4 class="text-center">Thanks for choosing us!</h4>
                                <p class="text-center">You can pay in cash when you arrive onboard our unit or pay now in PayPal.</p><br>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 text-center">
                                    <p><strong>PAY IN CASH</strong></p>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex align-items-center"><img class="margin-right-10" src="/images/icons/extra.svg" height="16px"/>
                                            <p>Extras</p>
                                        </div>
                                    </div>
                                    <div class="row" id="grocery-stop-cash">
                                        <div class="col-sm-6 d-flex align-items-center"><img class="margin-right-10" src="/images/icons/grocery.svg" height="16px"/>
                                            <p> <i>Grocery stop</i></p>
                                        </div>
                                        <div class="col-sm-6 text-left">
                                            <p id="grocery-cash">   </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <p><strong>Total</strong></p>
                                        </div>
                                        <div class="col-sm-6 text-left">
                                            <p><strong id="price-cash">       </strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <p><strong>PAY IN PAYPAL</strong></p>
                                    <div class="row">
                                        <div class="col-sm-12 d-flex align-items-center"><img class="margin-right-10" src="/images/icons/extra.svg" height="16px">
                                            <p>Extras</p>
                                        </div>
                                    </div>
                                    <div class="row" id="grocery-stop-paypal">
                                        <div class="col-sm-6 d-flex align-items-center"><img class="margin-right-10" src="/images/icons/grocery.svg" height="16px">
                                            <p> <i>Grocery stop</i></p>
                                        </div>
                                        <div class="col-sm-6 text-left">
                                            <p id="grocery-paypal"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 d-flex align-items-center"><img class="margin-right-10" src="/images/icons/tax.svg" height="16px">
                                            <p>Taxes</p>
                                        </div>
                                        <div class="col-6">
                                            <p id="selectedTax"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <p> <strong>Total</strong></p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p><strong id="priceTotal">       </strong></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="https://www.paypal.com/mx/cgi-bin/webscr" method="post" name="paypalform" id="paypalform">
                                                <input type="hidden" name="cmd" value="_xclick">
                                                <input type="hidden" name="business" value="picatransfers.loscabos@gmail.com">
                                                <input type="hidden" name="item_name" value="Tours">
                                                <input type="hidden" name="currency_code" value="USD">
                                                <input type="hidden" name="rm" value="2">
                                                <input type="hidden" name="return" value="http://picatransferloscabos.com">
                                                <input type="hidden" name="notify_url" value="http://picatransferloscabos.com">
                                                <input type="hidden" name="item_number" id="item_number" value="">
                                                <input id="price-paypal" type="hidden" name="amount" value="">
                                                <input class="margin-top-20" type="image" src="https://www.paypalobjects.com/es_XC/i/btn/btn_paynow_LG.gif" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"><img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="info special">
                    <div class="text">
                        <h4>Booking Information</h4>
                        <div class="info-row">
                            <h6>Pax</h6>
                            <p id="vehicleselected">1 passenger</p>
                        </div>
                        <div class="info-row">
                            <h6>Hotel</h6>
                            <p id="hotelselected"></p>
                        </div>
                        <div class="info-row">
                            <h6>Service</h6>
                            <p id="serviceselected"></p>
                        </div><br/>
                        <div class="info-row">
                            <h6>Total</h6>
                            <p id="price"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="zones">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 col-lg fix-mobile-margin-bottom">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-header">
                        <p class="card-title">San Jose <br> del Cabo</p>
                        <p class="card-text">Zone 1</p>
                    </div>
                    <div class="card-body">
                        <p class="zone-service">Round trip</p>
                        <p id="zone-1-roudntrip" class="zone-price">$125 USD</p>
                        <p class="zone-service">One way</p>
                        <p id="zone-1-oneway" class="zone-price">$60 USD</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn zone w-100" type="button" data-bs-toggle="modal" data-bs-target="#zone-1">Hotel List</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg fix-mobile-margin-bottom">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-header">
                        <p class="card-title">Tourist <br> Corridor</p>
                        <p class="card-text">Zone 2</p>
                    </div>
                    <div class="card-body">
                        <p class="zone-service">Round trip</p>
                        <p id="zone-2-roudntrip" class="zone-price">$150 USD</p>
                        <p class="zone-service">One way</p>
                        <p id="zone-2-oneway" class="zone-price">$75 USD</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn zone w-100" type="button" data-bs-toggle="modal" data-bs-target="#zone-2">Hotel List</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg fix-mobile-margin-bottom">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-header">
                        <p class="card-title">Cabo San <br> Lucas</p>
                        <p class="card-text">Zone 3</p>
                    </div>
                    <div class="card-body">
                        <p class="zone-service">Round trip</p>
                        <p id="zone-3-roudntrip" class="zone-price">$175 USD</p>
                        <p class="zone-service">One way</p>
                        <p id="zone-3-oneway" class="zone-price">$85 USD</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn zone w-100" type="button" data-bs-toggle="modal" data-bs-target="#zone-3">Hotel List</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 col-lg fix-mobile-margin-bottom">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card-header">
                        <p class="card-title">CSL <br> Pacific</p>
                        <p class="card-text">Zone 4</p>
                    </div>
                    <div class="card-body">
                        <p class="zone-service">Round trip</p>
                        <p id="zone-4-roudntrip" class="zone-price">$188 USD</p>
                        <p class="zone-service">One way</p>
                        <p id="zone-4-oneway" class="zone-price">$95 USD</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn zone w-100" type="button" data-bs-toggle="modal" data-bs-target="#zone-4">Hotel List</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="zone-1" role="dialog" tabindex="-1" aria-labelledby="modalLabelZone1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modalLabelZone1">Hotel List</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row justify-content-center">
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/alegranza.jpg" width="100%" alt="Alegranza"/>
                            <p class="text-center">Alegranza</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/barcelo-grand-faro.jpg" width="100%" alt="Barcelo Grand Faro"/>
                            <p class="text-center">Barcelo Grand Faro</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/cabo-azul.jpg" width="100%" alt="Cabo Azul"/>
                            <p class="text-center">Cabo Azul</p>
                        </div>
                        <div class="ico-hotel"><img src="../images/icons/hotels/casa-costa-azul.jpg" width="100%" alt="Casa Costa Azul"/>
                            <p class="text-center">Casa Costa Azul</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/casa-natalia.jpg" width="100%" alt="Casa Natalia"/>
                            <p class="text-center">Casa Natalia</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/club-campestre-san-jose.jpg" width="100%" alt="Club Campestre San Jose"/>
                            <p class="text-center">Club Campestre San Jose</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/drift.jpg" width="100%" alt="Drift"/>
                            <p class="text-center">Drift</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/encanto-inn.jpg" width="100%" alt="Encanto Inn"/>
                            <p class="text-center">Encanto Inn</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/grand-mayan.jpg" width="100%" alt="Grand Mayan"/>
                            <p class="text-center">Grand Mayan</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/holiday-inn-resort.jpg" width="100%" alt="Holiday Inn Resort"/>
                            <p class="text-center">Holiday Inn Resort</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hotel-colli.jpg" width="100%" alt="Hotel Colli"/>
                            <p class="text-center">Hotel Colli</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hyatt-place.jpg" width="100%" alt="Hyatt Place"/>
                            <p class="text-center">Hyatt Place</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hyatt-ziva.jpg" width="100%" alt="Hyatt Ziva"/>
                            <p class="text-center">Hyatt Ziva</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/las-mananitas.jpg" width="100%" alt="Las Mañanitas"/>
                            <p class="text-center">Las Mañanitas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/marisol-boutique.jpg" width="100%" alt="Marisol Boutique Hotel"/>
                            <p class="text-center">Marisol Boutique Hotel</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/mykonos.jpg" width="100%" alt="Mykonos"/>
                            <p class="text-center">Mykonos</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/park-royal.jpg" width="100%" alt="Park Royal"/>
                            <p class="text-center">Park Royal</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/posada-real.jpg" width="100%" alt="Posada Real"/>
                            <p class="text-center">Posada Real</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/posada-senor-manana.jpg" width="100%" alt="Posada Señor Mañana"/>
                            <p class="text-center">Posada Señor Mañana</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/posada-terranova.jpg" width="100%" alt="Posada Terranova"/>
                            <p class="text-center">Posada Terranova</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/posada-yuca-inn.jpg" width="100%" alt="Posada Yuca Inn"/>
                            <p class="text-center">Posada Yuca Inn</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/reflect-krystal-grand.jpg" width="100%" alt="Krystal Grand"/>
                            <p class="text-center">Reflect Krystal Grand</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/royal-decameron.jpg" width="100%" alt="Royal Decameron"/>
                            <p class="text-center">Royal Decameron</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/royal-solaris.jpg" width="100%" alt="Royal Solaris"/>
                            <p class="text-center">Royal Solaris</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/sampaguita.jpg" width="100%" alt="Sampaguita"/>
                            <p class="text-center">Sampaguita</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/santa-maria-hotel-and-suites.jpg" width="100%" alt="Santa Maria Hotel And Suites"/>
                            <p class="text-center">Santa Maria Hotel And Suites</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/soleado.jpg" width="100%" alt="Soleado Resort"/>
                            <p class="text-center">Soleado Resort</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/suites-las-palmas.jpg" width="100%" alt="Suite Las Palmas"/>
                            <p class="text-center">Suites Las Palmas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/tropicana-inn.jpg" width="100%" alt="Tropicana Inn"/>
                            <p class="text-center">Tropicana Inn</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/viceroy.jpg" width="100%" alt="Viceroy"/>
                            <p class="text-center">Viceroy</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/viva-condos.jpg" width="100%" alt="Viva Condos"/>
                            <p class="text-center">Viva Condos</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/worldmark-by-wyndham.jpg" width="100%" alt="Worldmark By Wyndham"/>
                            <p class="text-center">Coral Baja</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="zone-2" role="dialog" tabindex="-1" aria-labelledby="modalLabelZones" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hotel List</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row justify-content-center">
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/baja-point.jpg" width="100%" alt="Baja Point"/>
                            <p class="text-center">Baja Point</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/cabo-surf.jpg" width="100%" alt="Cabo Surf"/>
                            <p class="text-center">Cabo Surf</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/casa-del-mar.jpg" width="100%" alt="Casa del Mar"/>
                            <p class="text-center">Casa del Mar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/chileno-bay.jpg" width="100%" alt="Chileno Bay"/>
                            <p class="text-center">Chileno Bay</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/club-regina.jpg" width="100%" alt="Club Regina"/>
                            <p class="text-center">Club Regina</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/dreams.jpg" width="100%" alt="Dreams"/>
                            <p class="text-center">Dreams</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/el-dorado-residences.jpg" width="100%" alt="El Dorado Residences"/>
                            <p class="text-center">El Dorado Residences</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/el-ganzo.jpg" width="100%" alt="El Ganzo"/>
                            <p class="text-center">El Ganzo</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/encanto-de-la-laguna.jpg" width="100%" alt="Encanto de la Laguna"/>
                            <p class="text-center">Encanto de la Laguna</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/espiritu-del-mar.jpg" width="100%" alt="Espiritu del Mar"/>
                            <p class="text-center">Espiritu del Mar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/garza-blanca.jpg" width="100%" alt="Sheraton Hacienda del Mar"/>
                            <p class="text-center">Garza Blanca</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/grand-velas.jpg" width="100%" alt="Grand Velas"/>
                            <p class="text-center">Grand Velas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hampton-inn-suites.jpg" width="100%" alt="Hampton Inn Suites"/>
                            <p class="text-center">Hampton Inn Suites</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hilton.jpg" width="100%" alt="Hilton"/>
                            <p class="text-center">Hilton</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/jw-marriott.jpg" width="100%" alt="JW Marriott"/>
                            <p class="text-center">JW Marriott</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/las-ventanas-al-paraiso.jpg" width="100%" alt="Las Ventanas Al Paraiso"/>
                            <p class="text-center">Las Ventanas Al Paraiso</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/le-blanc.jpg" width="100%" alt="Le Blanc"/>
                            <p class="text-center">Le Blanc</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/maravilla.jpg" width="100%" alt="Maravilla"/>
                            <p class="text-center">Maravilla</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/marquis.jpg" width="100%" alt="Marquis"/>
                            <p class="text-center">Marquis</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/one-and-only-palmilla.jpg" width="100%" alt="One and Only Palmilla"/>
                            <p class="text-center">One and Only Palmilla</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/paradisus.jpg" width="100%" alt="Paradisus"/>
                            <p class="text-center">Paradisus</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/querencia.jpg" width="100%" alt="Querencia"/>
                            <p class="text-center">Querencia</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/ritz-carlton.jpg" width="100%" alt="Ritz-Carlton"/>
                            <p class="text-center">Ritz-Carlton</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/secrets-puerto-los-cabos.jpg" width="100%" alt="Secrets Puerto Los Cabos"/>
                            <p class="text-center">Secrets Puerto Los Cabos</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/sheraton-hacienda-del-mar.jpg" width="100%" alt="Sheraton Hacienda del Mar"/>
                            <p class="text-center">Sheraton Hacienda del Mar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/solaz.jpg" width="100%" alt="Solaz"/>
                            <p class="text-center">Solaz</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/vievage.jpg" width="100%" alt="VieVage"/>
                            <p class="text-center">VieVage</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/villas-del-mar.jpg" width="100%" alt="Villas del Mar"/>
                            <p class="text-center">Villas del Mar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/westin-regina.jpg" width="100%" alt="Westin Regina"/>
                            <p class="text-center">Westin Regina</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="zone-3" role="dialog" tabindex="-1" aria-labelledby="modalLabelZones" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hotel List</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row justify-content-center">
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/bahia.jpg" width="100%"/>
                            <p class="text-center">Bahia</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/breathless-cabo-san-lucas.jpg" width="100%" alt="Breathless Cabo San Lucas"/>
                            <p class="text-center">Breathless Cabo San Lucas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/cabo-cush.jpg" width="100%" alt="Cabo Cush"/>
                            <p class="text-center">Cabo Cush</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/cabo-viejo.jpg" width="100%" alt="Cabo Viejo"/>
                            <p class="text-center">Cabo Viejo</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/cabo-villas.jpg" width="100%" alt="Cabo Villas"/>
                            <p class="text-center">Cabo Villas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/casa-dorada.jpg" width="100%" alt="Casa Dorada"/>
                            <p class="text-center">Casa Dorada</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/city-express-plus.jpg" width="100%" alt="City Express Plus"/>
                            <p class="text-center">City Express Plus</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/city-express-suites.jpg" width="100%" alt="City Express Suites"/>
                            <p class="text-center">City Express Suites</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/club-cascadas-de-baja.jpg" width="100%" alt="Club Cascadas de Baja"/>
                            <p class="text-center">Club Cascadas de Baja</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/comfort-inn.jpg" width="100%" alt="Comfort Inn"/>
                            <p class="text-center">Comfort Inn</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/el-ameyal.jpg" width="100%" alt="Comfort Inn"/>
                            <p class="text-center">El Ameyal</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/esperanza-an-auberge.jpg" width="100%" alt="Esperanza An Auberge"/>
                            <p class="text-center">Esperanza An Auberge</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/estancia-real.jpg" width="100%" alt="Estancia Real"/>
                            <p class="text-center">Estancia Real</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/fairfield-inn-marriott.jpg" width="100%" alt="Fairfield Inn Marriott"/>
                            <p class="text-center">Faifield Inn Marriott</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/grand-fiesta-americana.jpg" width="100%" alt="Fiesta Americana Grand"/>
                            <p class="text-center">Grand Fiesta Americana</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/grand-solmar.jpg" width="100%" alt="Grand Solmar"/>
                            <p class="text-center">Grand Solmar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hacienda-beach-club.jpg" width="100%" alt="Hacienda Beach Club"/>
                            <p class="text-center">Hacienda Beach Club</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hacienda-encantada.jpg" width="100%" alt="Hacienda Encantada"/>
                            <p class="text-center">Hacienda Encantada</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/holiday-inn-express.jpg" width="100%" alt="Holiday Inn Express"/>
                            <p class="text-center">Holiday Inn Express</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/los-cabos-golf-resort.jpg" width="100%" alt="Los Cabos Golf Resort"/>
                            <p class="text-center">Los Cabos Golf Resort</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/los-patios.jpg" width="100%" alt="Los Patios"/>
                            <p class="text-center">Los Patios</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/mar-del-cabo.jpg" width="100%" alt="Marina Fiesta"/>
                            <p class="text-center">Mar del Cabo</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/marina-fiesta.jpg" width="100%" alt="Marina Fiesta"/>
                            <p class="text-center">Marina Fiesta</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/marina-sol.jpg" width="100%" alt="Marina Sol"/>
                            <p class="text-center">Marina Sol</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/me-cabo-by-melia.jpg" width="100%" alt="Me Cabo By Melia"/>
                            <p class="text-center">Me Cabo by Melia</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/medano-hotel-and-suites.jpg" width="100%" alt="Medano Hotel and Suites"/>
                            <p class="text-center">Medano Hotel and Suites</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/misiones-del-cabo.jpg" width="100%" alt="Misiones del Cabo"/>
                            <p class="text-center">Misiones del Cabo</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/montage.jpg" width="100%" alt="Misiones del Cabo"/>
                            <p class="text-center">Montage</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/playa-grande.jpg" width="100%" alt="Playa Grande"/>
                            <p class="text-center">Playa Grande</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/pueblo-bonito-los-cabos.jpg" width="100%" alt="Pueblo Bonito Los Cabos"/>
                            <p class="text-center">Pueblo Bonito Los Cabos</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/pueblo-bonito-rose.jpg" width="100%" alt="Pueblo Bonito Rose"/>
                            <p class="text-center">Pueblo Bonito Rose</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/quintas-del-sol.jpg" width="100%" alt="Quintas del Sol"/>
                            <p class="text-center">Quintas del Sol</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/riu-palace.jpg" width="100%" alt="Riu Palace"/>
                            <p class="text-center">Riu Palace</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/riu-santa-fe.jpg" width="100%" alt="Riu Santa Fe"/>
                            <p class="text-center">Riu Santa Fe</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/sandos-finisterra.jpg" width="100%" alt="Sandos Finisterra"/>
                            <p class="text-center">Sandos Finisterra</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/seven-crown.jpg" width="100%" alt="Seven Crown"/>
                            <p class="text-center">Seven Crown</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/sirena-del-mar.jpg" width="100%" alt="Sirena del Mar"/>
                            <p class="text-center">Sirena del Mar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/sunrock-condo.jpg" width="100%" alt="Sunrock Condo"/>
                            <p class="text-center">Sunrock Condo</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/the-cape-thompson.jpg" width="100%" alt="The Cape Thompson"/>
                            <p class="text-center">The Cape Thompson</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/villa-del-arco.jpg" width="100%" alt="Villa del Arco"/>
                            <p class="text-center">Villa del Arco</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/villa-del-palmar.jpg" width="100%" alt="Villa del Palmar"/>
                            <p class="text-center">Villa del Palmar</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/villa-la-estancia.jpg" width="100%" alt="Villa La Estancia"/>
                            <p class="text-center">Villa La Estancia</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/villa-valencia.jpg" width="100%" alt="Villa La Estancia"/>
                            <p class="text-center">Villa Valencia</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/waldorf-astoria-at-pedregal.jpg" width="100%" alt="Villa La Estancia"/>
                            <p class="text-center">Waldorf Astoria at Pedregal</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/wyndham-tesoro.jpg" width="100%" alt="Wyndham Tesoro"/>
                            <p class="text-center">Wyndham Tesoro</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="zone-4" role="dialog" tabindex="-1" aria-labelledby="modalLabelZones" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hotel List</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row justify-content-center">
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/copala.jpg" width="100%" alt="Copala"/>
                            <p class="text-center">Copala</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/montecristo-estates.jpg" width="100%" alt="Montecristo Estates"/>
                            <p class="text-center">Montecristo Estates</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/nova-hispania.jpg" width="100%" alt="Nova Hispania"/>
                            <p class="text-center">Nova Hispania</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/pedregal-cabo-san-lucas.jpg" width="100%" alt="Pedregal Cabo San Lucas"/>
                            <p class="text-center">Pedregal Cabo San Lucas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/pueblo-bonito-pacifica.jpg" width="100%" alt="Pueblo Bonito Pacifica"/>
                            <p class="text-center">Pueblo Bonito Pacifica</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/pueblo-bonito-sunset-beach.jpg" width="100%" alt="Pueblo Bonito Sunset Beach"/>
                            <p class="text-center">Pueblo Bonito Sunset Beach</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/quivira.jpg" width="100%" alt="Quivira"/>
                            <p class="text-center">Quivira</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="zone-5" role="dialog" tabindex="-1" aria-labelledby="modalLabelZones" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Hotel List</h4>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row justify-content-center">
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/diamante-cabo-san-lucas.jpg" width="100%" alt="Diamante Cabo San Lucas"/>
                            <p class="text-center">Diamante Cabo San Lucas</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/grand-solmar-at-rancho.jpg" width="100%" alt="Grand Solmar at Rancho"/>
                            <p class="text-center">Grand Solmar at Rancho</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/hard-rock-hotel.jpg" width="100%" alt="Hard Rock Hotel"/>
                            <p class="text-center">Hard Rock Hotel</p>
                        </div>
                        <div class="ico-hotel">
                            <img src="../images/icons/hotels/nobu.jpg" width="100%" alt="Nobu"/>
                            <p class="text-center">Nobu</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" type="button" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
