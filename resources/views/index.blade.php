@extends('base')

@section('title', 'Currency Exchange Pro - Real-time Exchange Rates')

@section('content')
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-50">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">
                    Real-time Currency Exchange
                </h1>
                <p class="lead mb-4">
                    Get instant access to live exchange rates for over 150 currencies worldwide. 
                    Convert currencies with confidence using our professional-grade platform.
                </p>
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="{{ url('converter') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-calculator me-2"></i>Currency Converter
                    </a>
                </div>
                
                @if($lastUpdated)
                <p class="text-muted">
                    <i class="fas fa-clock me-1"></i>
                    Last updated: {{ $lastUpdated }}
                </p>
                @endif
            </div>

            <div class="col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">
                            <i class="fas fa-globe-americas text-primary me-2"></i>
                            Major Currency Rates
                            @if($baseCurrency)
                                <small class="text-muted">(Base: {{ $baseCurrency }})</small>
                            @endif
                        </h5>
                        
                        @if($majorRates)
                            <div class="row g-3">
                                @foreach($majorRates as $currency => $rate)
                                    @if($currency != $baseCurrency && $rate > 0)
                                    <div class="col-6">
                                        <div class="currency-rate-card p-3 rounded border">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div>
                                                    <strong class="currency-code">{{ $currency }}</strong>
                                                    <div class="currency-rate">{{ number_format($rate, 4) }}</div>
                                                </div>
                                                <div class="currency-flag">
                                                    <i class="fas fa-coins text-primary"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-exclamation-triangle text-warning fa-2x mb-3"></i>
                                <p class="text-muted">Unable to load current exchange rates.</p>
                                <button class="btn btn-primary btn-sm" onclick="location.reload()">
                                    <i class="fas fa-sync-alt me-1"></i>Retry
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<section class="features-section py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-5 fw-bold mb-3">Why Choose Our Platform?</h2>
                <p class="lead text-muted">Professional-grade currency exchange tools for everyone</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-clock fa-3x text-primary"></i>
                    </div>
                    <h4>Real-time Updates</h4>
                    <p class="text-muted">
                        Get live exchange rates updated every minute from reliable financial data sources.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-shield-alt fa-3x text-success"></i>
                    </div>
                    <h4>Secure & Reliable</h4>
                    <p class="text-muted">
                        Bank-grade security with reliable data sources and 99.9% uptime guarantee.
                    </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="feature-card text-center p-4 h-100">
                    <div class="feature-icon mb-3">
                        <i class="fas fa-mobile-alt fa-3x text-info"></i>
                    </div>
                    <h4>Mobile Friendly</h4>
                    <p class="text-muted">
                        Responsive design that works perfectly on all devices, from mobile to desktop.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
$(document).ready(function() {
    // Example: animate currency rate cards on load
    $('.currency-rate-card').each(function(index) {
        $(this).css('opacity', '0').delay(index * 100).animate({opacity: 1}, 500);
    });
});
</script>
@endsection
