var tour;

tour = new Shepherd.Tour({
    defaults: {
        classes: 'shephred-element shepherd-theme-arrows',
        scrollTo: true,
        showCancelLink: true
    }
});

tour.addStep('example-step', {
    title: 'Testing',
    text: 'Appear Pls <code>HTML 5 rocks</code>',
    attachTo: '.small-navbar-brand bottom',
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

tour.addStep('test', {
    title: 'Testing 2',
    text: 'Hello World',
    attachTo: '.small-navbar-links bottom',
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

tour.addStep('test-2', {
    title: 'Testing 3',
    text: 'Hello World',
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

tour.addStep('test-4', {
    title: 'Testing 4',
    text: 'Hello World',
    attachTo: '.fully-responsive p bottom',
    classes: 'shepherd shepherd-open shepherd-theme-arrows shepherd-transparent-text',
    buttons: [
        {
            text: 'Back',
            classes: 'shepherd-button-secondary',
            action: tour.back
        }, {
            text: 'Exit',
            classes: 'shepherd-button-example-primary',
            action: tour.hide
        }
    ]
});
tour.start();