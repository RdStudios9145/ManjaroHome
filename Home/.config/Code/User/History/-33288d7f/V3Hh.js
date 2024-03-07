import * as Noise from 'ts-perlin-simplex';

const noise = Noise.SimplexNoise();
console.log(noise.noise(0, 0));