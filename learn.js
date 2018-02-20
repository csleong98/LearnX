var tour;

tour = new Shepherd.Tour({
    defaults: {
        classes: 'shepherd-theme-arrows',
        scrollTo: true,
        showCancelLink: true
    }
});

tour.addStep('navbrand', {
    title: 'Navbrand',
    text: ['Testing para', '<code>&lt;nav class="navbar navbar-expand-lg navbar-light bg-light"</code>',],
    attachTo: '.small-navbar-brand bottom',
    classes: 'shepherd-theme-arrows shepherd-content code',
    buttons: [

        {
            text: 'Exit',
            classes: 'shepherd-button-secondary',
            action: tour.hide
        },
        {
            text: 'Next',
            action: tour.next
        }
    ]
});

tour.addStep('nav-links', {
    title: 'navlinks',
    text: 'Code Blocks',
    attachTo: '.small-navbar-links bottom',
    classes: 'shepherd-theme-arrows shepherd-transparent-text',
    buttons: [
        {
            text: 'Back',
            classes: 'shepherd-button-secondary',
            action: tour.back
        }, {
            text: 'Next',
            classes: 'shepherd-button-example-primary',
            action: tour.next
        }
    ]
});

tour.addStep('header', {
    title: 'Header',
    text: 'Code Blocks',
    attachTo: '.content h3 bottom',
    classes: 'shepherd shepherd-open shepherd-theme-arrows shepherd-transparent-text',
    buttons: [
        {
            text: 'Back',
            classes: 'shepherd-button-secondary',
            action: tour.back
        }, {
            text: 'Next',
            classes: 'shepherd-button-example-primary',
            action: tour.next
        }
    ]
});

tour.start();