<!DOCTYPE html>
<html>
<head><title>Test</title></head>
<body>
<script>
const DEFAULT_CONFIG = {
    heroSliders: [
        { id: 1, image: 'assets/About/hero_navy.png', title: 'ELEGANCE IN<br>EVERY DETAIL', subtitle: 'Explore the exclusive fashion & jewelry collection from Madelia.' }
    ],
};

const Site = {
    config: DEFAULT_CONFIG,
    mergeConfig(base, override) {
        if (!override) return base;
        const merged = { ...base };
        Object.keys(override).forEach(key => {
            if (override[key] && typeof override[key] === 'object' && !Array.isArray(override[key]) && base[key]) {
                merged[key] = { ...base[key], ...override[key] };
            } else {
                merged[key] = override[key];
            }
        });
        return merged;
    }
};

const data = {
    hero_sliders: "[{\"id\":1,\"title\":\"Test\",\"image\":\"test.jpg\"}]"
};

const mappedData = {};
if (data.hero_sliders) {
    mappedData.heroSliders = (typeof data.hero_sliders === 'string') ? JSON.parse(data.hero_sliders) : data.hero_sliders;
}

Site.config = Site.mergeConfig(Site.config, { ...data, ...mappedData });

console.log(JSON.stringify(Site.config.heroSliders));
</script>
</body>
</html>
