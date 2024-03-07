const Noise = require("ts-perlin-simplex");
console.log(Noise);

const noise = Noise.SimplexNoise();
console.log(noise);
console.log(noise.noise(0, 0));