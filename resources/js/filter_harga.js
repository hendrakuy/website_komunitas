function priceSlider() {
    const el = document.currentScript.closest('[x-data]');
    return {
        min: Number(el.dataset.min),
        max: Number(el.dataset.max),
        updateMin() {
            if (this.min > this.max - 10000) this.min = this.max - 10000;
        },
        updateMax() {
            if (this.max < this.min + 10000) this.max = this.min + 10000;
        }
    };
}