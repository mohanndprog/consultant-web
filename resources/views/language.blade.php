<div class="settings-group">
    <div class="settings toggle-group language-change-div">
        <div class="form-group">
            @if(\Illuminate\Support\Facades\Session::has('googtrans'))
                @if(\Illuminate\Support\Facades\Session::get('googtrans') == 1)
                    <a href="/change-language/2" class="dfr aic jcc upc notranslate" id="language-change-text">Arabic</a>
                @elseif(\Illuminate\Support\Facades\Session::get('googtrans') == 2)
                    <a href="/change-language/1" class="dfr aic jcc upc notranslate" id="language-change-text">English</a>
                @endif
            @else
                <a href="/change-language/2" class="dfr aic jcc upc notranslate" id="language-change-text">Arabic</a>
            @endif
        </div>
    </div>
</div>