<!DOCTYPE html>
<html lang="en">

    @php
        $header = 'StudyHub';
    @endphp
@include('includes.htmlhead')

<body>
    @include('includes.navbar')

    <div class="coming">
        <div class="text">
            <h1>We’re coming very soon.</h1>
            <p>Our website is under construction. We’ll be here soon with our new awesome and amazing site, subscribe to
                be notified.</p>
        </div>
        <div class="timer">
            <div class="days">
                <p>00 Days</p>
            </div>
            <div class="hours">
                <p>00 Hours</p>
            </div>
            <div class="mins">
                <p>00 Mins</p>
            </div>
            <div class="secs">
                <p>00 Secs</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="newsletter">
        <h1 class="news">Join Our Newsletter</h1>
        <p class="new">Signup to be the first to hear about exclusive deals, special offers, and upcoming collections
        </p>
        <form>
            <input type="email" placeholder="Enter email for weekly news!" required>
            <button type="submit">Subscribe</button>
        </form>
    </div>
    @include('includes.footer')
    <script src="{{ url('js/index.js') }}"></script>
</body>

</html>
