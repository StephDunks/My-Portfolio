
@extends('layout')
@extends('navigation')

@section('content')
  <div class="pricing-hero">
    <div class="hero-text" id="hero-text">
      <h1>Pricing and Rates</h1>
    </div>
  </div>
  <div class="pricing-background">
    <div class="container">
        <h1>Website Development Pricing</h1>
      <div class="row">
          <div class="col-md-4 col-sm-6">
              <div class="pricingTable">
                  <div class="pricingTable-header">
                      <i class="fa fa-adjust"></i>
                      <div class="price-value">$500*</div>
                  </div>
                  <h3 class="heading">Basic Website</h3>
                  <div class="pricing-content">
                      <ul>
                          <li>Hosting</li>
                          <li>Wordpress / CMS</li>
                          <li>4 Pages</li>
                      </ul>
                  </div>
                  <div class="pricing-bottom"></div>
              </div>
          </div>

          <div class="col-md-4 col-sm-6">
              <div class="pricingTable green">
                  <div class="pricingTable-header">
                      <i class="fa fa-briefcase"></i>
                      <div class="price-value">$1500*</div>
                  </div>
                  <h3 class="heading">Advanced Website</h3>
                  <div class="pricing-content">
                      <ul>
                          <li>5-6 Pages</li>
                          <li>Mobile Responsive</li>
                          <li>SEO</li>
                          <li>Social Media Implementation</li>
                      </ul>
                  </div>
                  <div class="pricing-bottom2"></div>
              </div>
          </div>


          <div class="col-md-4 col-sm-6">
              <div class="pricingTable green">
                  <div class="pricingTable-header">
                      <i class="fa fa-briefcase"></i>
                      <div class="price-value">$2500 & Above</div>
                  </div>
                  <h3 class="heading">Web App</h3>
                  <div class="pricing-content">
                      <ul>
                          <li>5-6 Pages</li>
                          <li>Database Setup</li>
                          <li>SEO</li>
                          <li>Content Creation</li>
                          <li>Social Media Creation</li>
                      </ul>
                  </div>
                  <div class="pricing-bottom3"></div>
              </div>
          </div>
      </div>
  </div>
</div>
  </div>
@endsection
