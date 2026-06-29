<!DOCTYPE html>
<html>
<head><title>Test</title></head>
<body>
<div id="dynamic-hero-slider-container"></div>
<script>
const dataStr = '[{\"id\":1782586010773,\"title\":\"Hero Banner\",\"image\":\"data:image/jpeg;base64,/9j/4AAQSkZJRgAB...\"}]';
const data = { hero_sliders: dataStr };

const mappedData = {};
if (data.hero_sliders) {
    mappedData.heroSliders = (typeof data.hero_sliders === 'string') ? JSON.parse(data.hero_sliders) : data.hero_sliders;
}

const DEFAULT_CONFIG = { heroSliders: [] };
const mergeConfig = (base, override) => {
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
};

const config = mergeConfig(DEFAULT_CONFIG, { ...data, ...mappedData });

const container = document.getElementById('dynamic-hero-slider-container');
container.innerHTML = config.heroSliders.map((ad, i) => {
    const img = (ad.image && !ad.image.startsWith('http') && !ad.image.startsWith('data:')) ? ad.image : ad.image;
    return <div class="hero-slide active-slide" style="background-image: url('\');"></div>;
}).join('');

console.log("INNER HTML:");
console.log(container.innerHTML.substring(0, 150));
</script>
</body>
</html>
