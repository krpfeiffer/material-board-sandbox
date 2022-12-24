<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-red.min.css" />
<link rel="stylesheet" href="/wp-content/plugins/material-design-dashboard/settings/style.css" />
<script defer src="https://cdn.rawgit.com/bgrins/TinyColor/master/tinycolor.js"></script>
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<!-- <script defer src="/wp-content/plugins/material-design-dashboard/settings/settings.js"></script> -->

<meta name="theme-color" content="#fff">
<div class='wrap'>
    <div class='mdwp-card mdwp-elevation1 mdwp-primary-back mdwp-card-header'>
        <div class='mdwp-header-title'>
            Material Design for WordPress Dashboard
        </div>
        Developed by <a href="https://fatih.bal.soy/">Fatih Balsoy</a> | Version 1.0 | <a href="https://github.com/fatihbalsoy/wp-material-design/issues/new">Request Features & Report Issues</a>
    </div>
    <form action="options.php" method="POST">
        <?php
        settings_fields('material_dashboard_plugin');
        ?>

        <div class='mdwp-content-center'>
            <div class='mdwp-card mdwp-first-card mdwp-elevation1 mdwp-light-back'>
                <?php
                do_settings_sections($this->settings_slug);
                ?>
            </div>
        </div>

        <?php
        submit_button();
        ?>
    </form>
    <div class='mdwp-content-center'>
        <div class='mdwp-card mdwp-first-card mdwp-elevation1 mdwp-light-back'>


            <div class='mdwp-card-title'>
                Appearance
            </div>
            <table class='form-table'>
                <tbody>
                    <tr>
                        <th scope='row'>Theme</th>
                        <td>
                            <form name="themeForm">
                                <input type="radio" name="theme" value="light"> Light<br>
                                <input type="radio" name="theme" value="dark"> Dark<br>
                                <input type="radio" name="theme" value="auto"> Auto (Turn on dark theme at night)
                            </form><br>
                            <div class='mdwp-helper-text'>We do not suggest turning on dark mode, it might make it
                                difficult to read
                                text in third-party plugins.</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope='row'>Colors</th>
                        <td>
                            Primary Color:<br>
                            <input type="text" id='primary-color' placeholder="Teal" value="#0288D1" onchange="changePrimaryColor()" /><br>
                            <div class='mdwp-helper-text'>Toolbars and Navigations</div>
                            <br>
                            <br>
                            Accent Color:<br>
                            <input type="text" id='accent-color' placeholder="Crimson" value="#C62828" onchange="changeAccentColor()" /><br>
                            <div class='mdwp-helper-text'>Text Selections and Controls</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope='row'>Font</th>
                        <td>
                            <select id="font-face" onchange="changeFontType()">
                                <option value="roboto">Roboto</option>
                                <option value="product-sans">Product Sans</option>
                                <option value="default">WordPress Default</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope='row'>Icons</th>
                        <td>
                            <select id="icon-fonts" onchange="changeIcons()">
                                <option value="md-icons">Material Icons</option>
                                <option value="default">WordPress Dashicons</option>
                            </select>
                            <br>
                            <div class='mdwp-helper-text'>If you experience any issues with Material Icons, feel free to
                                turn it off
                                by switching to WordPress Dashicons</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope='row'>Toolbar</th>
                        <td>
                            <input type="checkbox">Cover secondary menu in Divi Themes when toolbar is
                            visible<input /><br>
                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
                                <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                                <span class="mdl-switch__label"></span>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="submit">
            <input style="background:var(--accent-color); color:#fff;" type="submit" name="submit" id="submit" class="button mdwp-button" value="Save Changes">
        </p>
    </div>

</div>