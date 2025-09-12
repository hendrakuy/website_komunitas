function priceSlider() {
    return {
        min: {{ request('min_price', 100000) }},
        max: {{ request('max_price', 500000) }},
        updateMin() {
            if (this.min > this.max - 10000) this.min = this.max - 10000; // jaga jarak min < max
        },
        updateMax() {
            if (this.max < this.min + 10000) this.max = this.min + 10000; // jaga jarak max > min
        }
    }
}