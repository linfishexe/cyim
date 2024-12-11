const loading_cover = document.getElementById('loading_cover');
const logo_svg = document.getElementById('logo_svg');
const logo_svg_path = document.querySelectorAll('#logo_svg>g>path');
const dr = document.querySelectorAll('#logo_dr>path');
const br = document.querySelectorAll('#logo_br>path');
logo_svg_path.forEach(e => {e.style = `stroke-dasharray: 0, ${e.getTotalLength()}px;`;});
logo_svg_path.forEach(e => {e.style = `stroke-dasharray: ${e.getTotalLength()}px, 0;`;});
setTimeout(() => {
    dr.forEach(e => {e.style = `stroke-dasharray: ${e.getTotalLength()}px, 0; fill: var(--deep_red)`;});
    br.forEach(e => {e.style = `stroke-dasharray: ${e.getTotalLength()}px, 0; fill: var(--bright_red)`;});
    loading_cover.style.opacity = 0;
    setTimeout(() => {loading_cover.style.display = 'none';}, 900)
},2000)