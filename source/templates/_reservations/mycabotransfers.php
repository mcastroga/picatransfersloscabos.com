<section id="mycabotransfers">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Private Transportation in Cabo</h2>
            </div>
            <div class="col-12">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <a href="https://www.tripadvisor.com.mx/Attraction_Review-g150773-d16962624-Reviews-Picatransfers_Los_Cabos-Los_Cabos_Baja_California.html" target="_blank">54 reviews</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                <div class="border-card">
                    <div class="reservation-header">
                        <p>From USD <span id="price">$ 65.00</span></p>
                    </div>
                    <div class="row" id="step-2">
                        <form class="col-sm-12">
                            <div class="info info-container">
                                <div class="col-12">
                                    <h4>STEP 1 - Choose your destination</h4>
                                </div>
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
                                    <div class="d-flex">
                                        <div class='qtyminus'>-</div>
                                        <input id="form-unit" name='1' type='text' value='1' readonly />
                                        <div class="qtyplus">+</div>
                                    </div>
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
                                        <option name="passengers" value="12">12 Passengers</option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <input class="submit-button" id="send-prebook" type="button" name="SEND" value="Check & Continue" disabled="disabled"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row" id="step-3">
                        <form class="col-sm-12">
                            <div class="info info-container">
                                <div class="col-12">
                                    <h4>STEP 2 - Add your information</h4>
                                </div>
                                 <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Full Name</label>
                                    <input id="form-name" type="text" name="name"/>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Email</label>
                                    <input id="form-email" type="text" name="email"/>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <label>Phone</label>
                                    <input id="form-phone" type="number" name="phone"/>
                                </div>
                                <div id="arrival" class="row">
                                    <div class="col-12">
                                        <p>Arrival Information</p>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Date</label>
                                        <input id="form-arrival-date" type="date" name="arrivaldate"/>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Time</label>
                                        <input id="form-arrival-time" type="time" name="arrivaltime"/>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Airline</label>
                                        <input id="form-arrival-airline" type="text"/>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Flight #</label>
                                        <input id="form-arrival-flight" type="text" name="arrivalflight" placeholder="Flight"/>
                                    </div>
                                </div>
                                <div id="departure" class="row">
                                    <div class="col-12">
                                        <p>Departure Information</p>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Date</label>
                                        <input id="form-departure-date" type="date" name="departuredate"/>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Time</label>
                                        <input id="form-departure-time" type="time" name="departuretime"/>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Airline</label>
                                        <input id="form-departure-airline" type="text"/>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                        <label>Flight #</label>
                                        <input id="form-departure-flight" type="text" name="departureflight" placeholder="Flight"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <label>Requirements</label>
                                        <input id="form-comment" name="comments" type="text" placeholder="Baby seat, booster seat, grocery stop, etc"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input class="submit-button" id="send-book" type="button" name="SEND" value="Check & Continue"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row" id="step-4">
                        <form class="col-sm-12">
                            <div class="info info-container">
                                <div class="col-12">
                                    <h4>STEP 3 - Add some extras</h4>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <label>Baby Seat</label>
                                        <input id="form-babyseat" type="text" name="babyseat"/>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <label>Buster Seat</label>
                                        <input id="form-busterseat" type="text" name="busterseat"/>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                        <label>Grocery Stop for 30 min</label>
                                        <input id="form-grocery" type="checkbox" name="grocery"/>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <input class="submit-button" id="send-mail" type="button" name="SEND" value="SEND"/>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row" id="step-5">
                        <div class="col-sm-12">
                            <div class="info info-container ">
                                <div class="col-12">
                                    <h4>STEP 4 - Choose your payment method</h4>
                                </div>
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
                                                <p><strong id="priceTotal"></strong></p>
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
                    <div class="row">
                        <div class="col-12 text-center footer-paypal">
                            <p>Reserve Now & Pay Later</p>
                            <p>Secure your spot while staying flexible</p>
                            <img src="/images/icons/paypal-logo.png" width="80%" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-8">
                <div class="border-card">
                    <div id="square-image">
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
                                    <p ></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                <div class="border-card">
                    <div class="square-review"></div>
                </div>
            </div>
        </div>
    </div>
</section>