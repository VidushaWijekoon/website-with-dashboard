import React from "react";
import "./pay.css";

import Payment from "../../../assets/images/payments.png";

const PayOnline = () => {
  return (
    <>
      <div className="container mb-5">
        <div className="py-5 text-center">
          <h2>Checkout form</h2>
        </div>

        <div className="row justify-content-center">
          <div className="col-md-10 order-md-1">
            <h4 className="mb-3">Billing address</h4>
            <form>
              <div className="row">
                <div className="col-md-6 mb-3">
                  <label for="firstName">First name</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="address"
                    placeholder="First Name"
                    required
                  />
                </div>
                <div className="col-md-6 mb-3">
                  <label for="lastName">Last name</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="address"
                    placeholder="Last Name"
                    required
                  />
                </div>
              </div>

              <div className="mb-3">
                <label for="Fullname">Fullname</label>
                <div className="input-group">
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="address"
                    placeholder="Fullname"
                    required
                  />
                </div>
              </div>

              <div className="mb-3">
                <label for="username">Username</label>
                <div className="input-group">
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="address"
                    placeholder="Username"
                    required
                  />
                </div>
              </div>

              <div className="mb-3">
                <label for="username">Company Name</label>
                <div className="input-group">
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="address"
                    placeholder="Company Name"
                    required
                  />
                </div>
              </div>

              <div className="mb-3">
                <label for="email">Email</label>
                <input
                  type="email"
                  className="form-control form-control-sm rounded-0 "
                  id="email"
                  placeholder="you@example.com"
                />
              </div>

              <div className="mb-3">
                <label for="address">Address</label>
                <input
                  type="text"
                  className="form-control form-control-sm rounded-0 "
                  id="address"
                  placeholder="Address 1"
                  required
                />
              </div>

              <div className="mb-3">
                <label for="address2">Address 2</label>
                <input
                  type="text"
                  className="form-control form-control-sm rounded-0 "
                  id="address2"
                  placeholder="Address 2"
                />
              </div>

              <div className="row">
                <div className="col-md-5 mb-3">
                  <label for="country">Country</label>
                </div>
                <div className="col-md-4 mb-3">
                  <label for="state">State</label>
                </div>
                <div className="col-md-3 mb-3">
                  <label for="zip">Zip</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="zip"
                    placeholder="Zip Code"
                    required
                  />
                </div>
              </div>

              <hr className="mb-4" />

              <h4 className="mb-3">Payment</h4>

              <div className="d-block my-3">
                <div className="custom-control custom-radio">
                  <input
                    id="credit"
                    name="paymentMethod"
                    type="radio"
                    className="custom-control-input"
                    checked
                    required
                  />
                  <label className="custom-control-label" for="credit">
                    Credit card
                  </label>
                </div>
                <div className="custom-control custom-radio">
                  <input
                    id="debit"
                    name="paymentMethod"
                    type="radio"
                    className="custom-control-input"
                    required
                  />
                  <label className="custom-control-label" for="debit">
                    Debit card
                  </label>
                </div>
                <div className="custom-control custom-radio">
                  <input
                    id="paypal"
                    name="paymentMethod"
                    type="radio"
                    className="custom-control-input"
                    required
                  />
                  <label className="custom-control-label" for="paypal">
                    PayPal
                  </label>
                </div>
              </div>
              <div className="mb-3 mt-3">
                <img src={Payment} alt="" />
              </div>
              <div className="row">
                <div className="col-md-6 mb-3">
                  <label for="cc-name">Name on card</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="cc-name"
                    placeholder="Card Name"
                    required
                  />
                </div>
                <div className="col-md-6 mb-3">
                  <label for="cc-number">Credit card number</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="cc-number"
                    placeholder="Card Number"
                    required
                  />
                </div>
              </div>
              <div className="row">
                <div className="col-md-3 mb-3">
                  <label for="cc-expiration">Expiration</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="cc-expiration"
                    placeholder="Expiration"
                    required
                  />
                </div>
                <div className="col-md-3 mb-3">
                  <label for="cc-cvv">CVV</label>
                  <input
                    type="text"
                    className="form-control form-control-sm rounded-0 "
                    id="cc-cvv"
                    placeholder="CVV"
                    required
                  />
                </div>
              </div>
              <hr className="mb-4" />
              <button
                className="btn btn-primary btn-sm btn-lg btn-block"
                type="submit"
              >
                Continue to checkout
              </button>
            </form>
          </div>
        </div>
      </div>
    </>
  );
};

export default PayOnline;
