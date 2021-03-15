$(document).ready(function () {

    $(".contact-name-icon").click(function () {
        $(".contact-name-tooltip").fadeToggle();
    });

    $(".company-name-icon").click(function () {
        $(".company-name-tooltip").fadeToggle();
    });

    $(".product-name-icon").click(function () {
        $(".product-name-tooltip").fadeToggle();
    });

    $(".technical-support-icon").click(function () {
        $(".technical-support-tooltip").fadeToggle();
    });

    $(".product-type-icon").click(function () {
        $(".product-type-tooltip").fadeToggle();
    });

    $(".custom-product-icon").click(function () {
        $(".custom-product-tooltip").fadeToggle();
    });

    $(".affiliate-commission-icon").click(function () {
        $(".affiliate-commission-tooltip").fadeToggle();
    });

    $(".product-price-icon").click(function () {
        $(".product-price-tooltip").fadeToggle();
    });

    $(".sales-page-icon").click(function () {
        $(".sales-page-tooltip").fadeToggle();
    });

    $(".website-access-icon").click(function () {
        $(".website-access-tooltip").fadeToggle();
    });

    $(".funnel-icon").click(function () {
        $(".funnel-tooltip").fadeToggle();
    });

    $(".integrations-icon").click(function () {
        $(".integrations-tooltip").fadeToggle();
    });

    $(".integration-type-icon").click(function () {
        $(".integration-type-tooltip").fadeToggle();
    });

    $(".integration-fulfillment-icon").click(function () {
        $(".integration-fulfillment-tooltip").fadeToggle();
    });

    $(".integration-credentials-icon").click(function () {
        $(".integration-credentials-tooltip").fadeToggle();
    });

    $(".fulfillment-icon").click(function () {
        $(".fulfillment-tooltip").fadeToggle();
    });

    $(".access-data-icon").click(function () {
        $(".access-data-tooltip").fadeToggle();
    });

    $('#ifTechSupport').hide();

    $('#techSupport').change(function() {
        if ($('#techSupport').val() == 1) {
            $('#ifTechSupport').hide();
        }
    });

    $('#techSupport').change(function() {
        if ($('#techSupport').val() == 2) {
            $('#ifTechSupport').show();
        }
    });
    // Sumo Select
    $('select').not('#upsellDownsell').SumoSelect();

    $("#productType").change(function () {

        if ($(this).val() == '14') {
            $(".custom-product-opt").fadeIn();
        } else if ($(this).val() == '13') {
            $(".custom-product-opt-1").fadeIn();
        } else {
            $(".custom-product-opt").fadeOut();
            $(".custom-product-opt-1").fadeOut();
        }
    });


    var inputs = 1;

    $('#btnAdd').click(function () {
        $('.btnDel:disabled').removeAttr('disabled');
        var c = $('.clonedInput:first').clone(true);
        //c.children(':text').attr('name', 'input' + (++inputs));
        var fields = c.find('input:text, select');
        var index = ++inputs;
        fields.each(function(i, e) {
            e.name =  e.name + index;
            //e.id = e.id + index;
        });
        $('.clonedInput:last').after(c);
    });

    $('.btnDel').click(function () {

        --inputs;
        $(this).closest('.clonedInput').remove();
        $('.btnDel').attr('disabled', ($('.clonedInput').length < 2));
    });
});

$('#phoneNumber').blur(function(event) {
    var patt = new RegExp(/^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm);
    var phone = $(event.target).val();
    if(!patt.test(phone)) {
        alert("You have entered an invalid phone number!");
        $(event.target).val('');
    }
});

$('#emailAddress').blur(function(event) {
    var patt = new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);
    var email = $(event.target).val();
    if(!patt.test(email)) {
        alert("You have entered an invalid email address!");
        $(event.target).val('');
    }
});

// Time Zones Dropdown
const _t = (s) => {
    if (i18n !== void 0 && i18n[s]) {
        return i18n[s];
    }

    return s;
};

const timezones = [
    "Etc/GMT+12",
    "Pacific/Midway",
    "Pacific/Honolulu",
    "America/Juneau",
    "America/Dawson",
    "America/Boise",
    "America/Chihuahua",
    "America/Phoenix",
    "America/Chicago",
    "America/Regina",
    "America/Mexico_City",
    "America/Belize",
    "America/Detroit",
    "America/Indiana/Indianapolis",
    "America/Bogota",
    "America/Glace_Bay",
    "America/Caracas",
    "America/Santiago",
    "America/St_Johns",
    "America/Sao_Paulo",
    "America/Argentina/Buenos_Aires",
    "America/Godthab",
    "Etc/GMT+2",
    "Atlantic/Azores",
    "Atlantic/Cape_Verde",
    "GMT",
    "Africa/Casablanca",
    "Atlantic/Canary",
    "Europe/Belgrade",
    "Europe/Sarajevo",
    "Europe/Brussels",
    "Europe/Amsterdam",
    "Africa/Algiers",
    "Europe/Bucharest",
    "Africa/Cairo",
    "Europe/Helsinki",
    "Europe/Athens",
    "Asia/Jerusalem",
    "Africa/Harare",
    "Europe/Moscow",
    "Asia/Kuwait",
    "Africa/Nairobi",
    "Asia/Baghdad",
    "Asia/Tehran",
    "Asia/Dubai",
    "Asia/Baku",
    "Asia/Kabul",
    "Asia/Yekaterinburg",
    "Asia/Karachi",
    "Asia/Kolkata",
    "Asia/Kathmandu",
    "Asia/Dhaka",
    "Asia/Colombo",
    "Asia/Almaty",
    "Asia/Rangoon",
    "Asia/Bangkok",
    "Asia/Krasnoyarsk",
    "Asia/Shanghai",
    "Asia/Kuala_Lumpur",
    "Asia/Taipei",
    "Australia/Perth",
    "Asia/Irkutsk",
    "Asia/Seoul",
    "Asia/Tokyo",
    "Asia/Yakutsk",
    "Australia/Darwin",
    "Australia/Adelaide",
    "Australia/Sydney",
    "Australia/Brisbane",
    "Australia/Hobart",
    "Asia/Vladivostok",
    "Pacific/Guam",
    "Asia/Magadan",
    "Pacific/Fiji",
    "Pacific/Auckland",
    "Pacific/Tongatapu"
];

const i18n = {
    "Etc/GMT+12": "International Date Line West",
    "Pacific/Midway": "Midway Island, Samoa",
    "Pacific/Honolulu": "Hawaii",
    "America/Juneau": "Alaska",
    "America/Dawson": "Pacific Time (US and Canada); Tijuana",
    "America/Boise": "Mountain Time (US and Canada)",
    "America/Chihuahua": "Chihuahua, La Paz, Mazatlan",
    "America/Phoenix": "Arizona",
    "America/Chicago": "Central Time (US and Canada)",
    "America/Regina": "Saskatchewan",
    "America/Mexico_City": "Guadalajara, Mexico City, Monterrey",
    "America/Belize": "Central America",
    "America/Detroit": "Eastern Time (US and Canada)",
    "America/Indiana/Indianapolis": "Indiana (East)",
    "America/Bogota": "Bogota, Lima, Quito",
    "America/Glace_Bay": "Atlantic Time (Canada)",
    "America/Caracas": "Caracas, La Paz",
    "America/Santiago": "Santiago",
    "America/St_Johns": "Newfoundland and Labrador",
    "America/Sao_Paulo": "Brasilia",
    "America/Argentina/Buenos_Aires": "Buenos Aires, Georgetown",
    "America/Godthab": "Greenland",
    "Etc/GMT+2": "Mid-Atlantic",
    "Atlantic/Azores": "Azores",
    "Atlantic/Cape_Verde": "Cape Verde Islands",
    "GMT": "Dublin, Edinburgh, Lisbon, London",
    "Africa/Casablanca": "Casablanca, Monrovia",
    "Atlantic/Canary": "Canary Islands",
    "Europe/Belgrade": "Belgrade, Bratislava, Budapest, Ljubljana, Prague",
    "Europe/Sarajevo": "Sarajevo, Skopje, Warsaw, Zagreb",
    "Europe/Brussels": "Brussels, Copenhagen, Madrid, Paris",
    "Europe/Amsterdam": "Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna",
    "Africa/Algiers": "West Central Africa",
    "Europe/Bucharest": "Bucharest",
    "Africa/Cairo": "Cairo",
    "Europe/Helsinki": "Helsinki, Kiev, Riga, Sofia, Tallinn, Vilnius",
    "Europe/Athens": "Athens, Istanbul, Minsk",
    "Asia/Jerusalem": "Jerusalem",
    "Africa/Harare": "Harare, Pretoria",
    "Europe/Moscow": "Moscow, St. Petersburg, Volgograd",
    "Asia/Kuwait": "Kuwait, Riyadh",
    "Africa/Nairobi": "Nairobi",
    "Asia/Baghdad": "Baghdad",
    "Asia/Tehran": "Tehran",
    "Asia/Dubai": "Abu Dhabi, Muscat",
    "Asia/Baku": "Baku, Tbilisi, Yerevan",
    "Asia/Kabul": "Kabul",
    "Asia/Yekaterinburg": "Ekaterinburg",
    "Asia/Karachi": "Islamabad, Karachi, Tashkent",
    "Asia/Kolkata": "Chennai, Kolkata, Mumbai, New Delhi",
    "Asia/Kathmandu": "Kathmandu",
    "Asia/Dhaka": "Astana, Dhaka",
    "Asia/Colombo": "Sri Jayawardenepura",
    "Asia/Almaty": "Almaty, Novosibirsk",
    "Asia/Rangoon": "Yangon Rangoon",
    "Asia/Bangkok": "Bangkok, Hanoi, Jakarta",
    "Asia/Krasnoyarsk": "Krasnoyarsk",
    "Asia/Shanghai": "Beijing, Chongqing, Hong Kong SAR, Urumqi",
    "Asia/Kuala_Lumpur": "Kuala Lumpur, Singapore",
    "Asia/Taipei": "Taipei",
    "Australia/Perth": "Perth",
    "Asia/Irkutsk": "Irkutsk, Ulaanbaatar",
    "Asia/Seoul": "Seoul",
    "Asia/Tokyo": "Osaka, Sapporo, Tokyo",
    "Asia/Yakutsk": "Yakutsk",
    "Australia/Darwin": "Darwin",
    "Australia/Adelaide": "Adelaide",
    "Australia/Sydney": "Canberra, Melbourne, Sydney",
    "Australia/Brisbane": "Brisbane",
    "Australia/Hobart": "Hobart",
    "Asia/Vladivostok": "Vladivostok",
    "Pacific/Guam": "Guam, Port Moresby",
    "Asia/Magadan": "Magadan, Solomon Islands, New Caledonia",
    "Pacific/Fiji": "Fiji Islands, Kamchatka, Marshall Islands",
    "Pacific/Auckland": "Auckland, Wellington",
    "Pacific/Tongatapu": "Nuku'alofa"
}
const dateTimeUtc = moment("2017-06-05T19:41:03Z").utc();
document.querySelector(".js-TimeUtc").innerHTML = dateTimeUtc.format("ddd, DD MMM YYYY HH:mm:ss");

const selectorOptions = moment.tz.names()
    .filter(tz => {
        return timezones.includes(tz)
    })
    .reduce((memo, tz) => {
        memo.push({
            name: tz,
            offset: moment.tz(tz).utcOffset()
        });

        return memo;
    }, [])
    .sort((a, b) => {
        return a.offset - b.offset
    })
    .reduce((memo, tz) => {
        const timezone = tz.offset ? moment.tz(tz.name).format('Z') : '';

        return memo.concat(`<option value="${tz.name}">(GMT${timezone}) ${_t(tz.name)}</option>`);
    }, "");

document.querySelector(".js-Selector").innerHTML = selectorOptions;

$(".js-Selector").on("change", e => {
    const timestamp = dateTimeUtc.unix();
    const offset = moment.tz(e.target.value).utcOffset() * 60;
    const dateTimeLocal = moment.unix(timestamp + offset).utc();

    document.querySelector(".js-TimeLocal").innerHTML = dateTimeLocal.format("ddd, DD MMM YYYY HH:mm:ss");
});

document.querySelector(".js-Selector").value = "Europe/Brussels";

const event = new Event("change");
document.querySelector(".js-Selector").dispatchEvent(event);

