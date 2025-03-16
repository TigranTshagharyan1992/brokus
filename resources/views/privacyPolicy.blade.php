@extends('layouts.app')

@section('styles')
    <!-- Page Css -->
    <link rel="stylesheet" href="{{asset('assets/css/pages/privacy-policy.css')}}">
    <!-- ========================== -->
@endsection

@section('content')

<div class="privacy-policy">
    <div class="privacy-policy__heading">
        <div class="row">
            <div class="column sm-12 text-center">
                <h1 class="privacy-policy__title font-48 font-lg-34 font-sm-28">Privacy Policy</h1>
            </div>
        </div>
    </div>
    <div class="privacy-policy__body">
        <div class="row align-center">
            <div class="column sm-12 lg-10 xl-8">
                <div class="privacy-policy__content font-sm-14 rich-text">
                    <b>1. Information We Collect</b>
                    <br><br>
                    We do not collect personal information from visitors to our website unless you voluntarily provide it (e.g., via contact forms or email inquiries).
                    <br><br>
                    2. Cookies and Tracking
                    <br><br>
                    Our website may use cookies or analytics tools to improve your browsing experience. These tools collect non-personal data, such as your IP address or browsing behavior, but do not identify you personally.
                    <br><br>
                    3. Third-Party Services
                    <br><br>
                    We may use third-party tools, such as website hosting providers, analytics platforms (e.g., Google Analytics), or social media plugins, which may collect and process data in accordance with their privacy policies.
                    <br><br>
                    4. Data Security
                    <br><br>
                    While we do not <a href="#">actively</a> store personal data, any information you voluntarily share with us (e.g., through forms or emails) is handled with care to ensure its security.
                    <br><br>
                    5. Your Rights
                    <br><br>
                    You have the right to access, correct, or request the deletion of any personal data you may provide to us.
                    <br><br>
                    6. Changes to This Policy
                    <br><br>
                    We reserve the right to update this Privacy Policy to reflect changes in our practices or legal requirements. Updates will be posted on this page.
                    Contact UsIf you have any questions about this Privacy Policy, please contact us at:
                    <br>
                    Email: office@brokus.am
                    <br>
                    Phone: +374 41 052052
                </div>
            </div>
        </div>
    </div>
</div>

@endsection