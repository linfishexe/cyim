class Parallax_card {
    constructor( { element, tiltEffect, container } ) {

        this.element          = element;
        this.container        = container;
        this.size             = [300, 360];
        [this.w, this.h]      = this.size;
        this.tiltEffect       = tiltEffect;

        this.mouseOnComponent = false;

        this.handleMove  = this.handleMove.bind(this);
        this.handleEnter = this.handleEnter.bind(this);
        this.handleLeave = this.handleLeave.bind(this);

        this.defaultStates    = this.defaultStates.bind(this);
        this.setProperty      = this.setProperty.bind(this);
        this.init             = this.init.bind(this);
        this.init();

    }

    /*-----------------------*/
    handleMove( event ) {

        const {offsetX, offsetY} = event;
        let X;
        let Y;
        if (this.tiltEffect === "reverse") {

            X = ((offsetX - (this.w/2)) / 3) / 3;
            Y = (-(offsetY - (this.h/2)) / 3) / 3;

        }
        else if (this.tiltEffect === "normal") {
            X = (-(offsetX - (this.w/2)) / 3) / 3;
            Y = ((offsetY - (this.h/2)) / 3) / 3;
        }
        this.setProperty('--rY', X.toFixed(2));
        this.setProperty('--rX', Y.toFixed(2));
        this.setProperty('--bY', (80 - (X/4).toFixed(2)) + '%');
        this.setProperty('--bX', (50 - (Y/4).toFixed(2)) + '%');
    }

    handleEnter() {
        this.mouseOnComponent = true;
        this.container.classList.add("parallax_card--active");
    }

    handleLeave() {
        this.mouseOnComponent = false;
        this.defaultStates();
    }

    /*-----------------------*/
    defaultStates() {
        this.container.classList.remove("parallax_card--active");
        this.setProperty('--rY', 0);
        this.setProperty('--rX', 0);
        this.setProperty('--bY', '80%');
        this.setProperty('--bX', '50%');
    }

    setProperty(p, v) {
        return this.container.style.setProperty(p, v);
    }

    init() {
        this.element.addEventListener('mousemove' , this.handleMove);
        this.element.addEventListener('mouseenter', this.handleEnter);
        this.element.addEventListener('mouseleave', this.handleLeave);

        // this.element.addEventListener("touchmove" , this.handleMove);
        // this.element.addEventListener("touchstart", this.handleEnter);
        // this.element.addEventListener("touchend"  , this.handleLeave);
    }
}