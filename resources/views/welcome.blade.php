@extends('layouts.app')

@section('content')
    <header class="top-bar">
        <div class="brand">
            <div class="brand-icon">♥</div>
            <div>
                <p class="brand-name">LifePulse</p>
                <p class="brand-tagline">Medical Support Network</p>
            </div>
        </div>
        <button class="ghost-button">Need Help Now</button>
    </header>

    <main class="page">
        <section class="hero">
            <div class="hero-content">
                <span class="pill">Live donor matching · 24/7 availability</span>
                <h1>Connect donors and patients in minutes.</h1>
                <p>
                    LifePulse helps verified blood donors share their live location and availability so patients can
                    request urgent blood support with confidence.
                </p>
                <div class="cta-row">
                    <button class="primary-button">Register as Donor</button>
                    <button class="secondary-button">Request Blood</button>
                </div>
                <div class="stats">
                    <div>
                        <h3>1.4k+</h3>
                        <p>Active donors</p>
                    </div>
                    <div>
                        <h3>7 mins</h3>
                        <p>Avg. match time</p>
                    </div>
                    <div>
                        <h3>98%</h3>
                        <p>Verified profiles</p>
                    </div>
                </div>
            </div>
            <div class="hero-card">
                <div class="map">
                    <div class="map-pin active"></div>
                    <div class="map-pin"></div>
                    <div class="map-pin"></div>
                </div>
                <div class="card-content">
                    <p class="card-title">Live donor tracking</p>
                    <p class="card-copy">See donors who are active and within 5km of your location.</p>
                    <div class="card-row">
                        <span class="badge">O+ · 2.3km</span>
                        <span class="badge">B- · 3.1km</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="tabs">
            <button class="tab active">Donor Experience</button>
            <button class="tab">Patient Experience</button>
        </section>

        <section class="grid">
            <article class="panel">
                <h2>Donor Registration</h2>
                <p>Create a verified donor profile and set your availability.</p>
                <div class="form-group">
                    <label for="donor-name">Full name</label>
                    <input id="donor-name" type="text" placeholder="E.g. Ayesha Khan">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="donor-blood">Blood group</label>
                        <select id="donor-blood">
                            <option>A+</option>
                            <option>O+</option>
                            <option>B+</option>
                            <option>AB+</option>
                            <option>A-</option>
                            <option>O-</option>
                            <option>B-</option>
                            <option>AB-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="donor-city">City</label>
                        <input id="donor-city" type="text" placeholder="Lahore">
                    </div>
                </div>
                <div class="form-group">
                    <label>Live location sharing</label>
                    <div class="toggle">
                        <span>Active now</span>
                        <div class="switch"></div>
                    </div>
                </div>
                <button class="primary-button full">Save donor profile</button>
            </article>

            <article class="panel">
                <h2>Patient Request</h2>
                <p>Post an urgent blood request with hospital details.</p>
                <div class="form-group">
                    <label for="patient-hospital">Hospital</label>
                    <input id="patient-hospital" type="text" placeholder="City Care Hospital">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="patient-blood">Blood needed</label>
                        <select id="patient-blood">
                            <option>O+</option>
                            <option>A+</option>
                            <option>B+</option>
                            <option>AB+</option>
                            <option>O-</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="patient-units">Units</label>
                        <input id="patient-units" type="number" placeholder="2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="patient-notes">Notes for donors</label>
                    <textarea id="patient-notes" rows="3" placeholder="Include timing, ward, or emergency details."></textarea>
                </div>
                <button class="secondary-button full">Broadcast request</button>
            </article>

            <article class="panel highlight">
                <h2>Nearby Active Donors</h2>
                <p>Real-time list of verified donors ready to help.</p>
                <div class="donor-list">
                    <div class="donor-item">
                        <div class="avatar">NK</div>
                        <div>
                            <p class="donor-name">Naveed Karim</p>
                            <p class="donor-meta">O+ · 12 mins away · Available now</p>
                        </div>
                        <button class="ghost-button">Message</button>
                    </div>
                    <div class="donor-item">
                        <div class="avatar">SA</div>
                        <div>
                            <p class="donor-name">Sara Ali</p>
                            <p class="donor-meta">B- · 18 mins away · On standby</p>
                        </div>
                        <button class="ghost-button">Message</button>
                    </div>
                    <div class="donor-item">
                        <div class="avatar">RH</div>
                        <div>
                            <p class="donor-name">Rahim Hussain</p>
                            <p class="donor-meta">A+ · 22 mins away · Active now</p>
                        </div>
                        <button class="ghost-button">Message</button>
                    </div>
                </div>
            </article>
        </section>
    </main>

    <footer class="footer">
        <div>
            <h4>Emergency support</h4>
            <p>24/7 hotline: +92 300 000 0000</p>
        </div>
        <div>
            <h4>Safety & verification</h4>
            <p>All donors are verified with ID and health screening status.</p>
        </div>
        <div>
            <h4>Privacy</h4>
            <p>Location sharing is opt-in and can be paused anytime.</p>
        </div>
    </footer>
@endsection
