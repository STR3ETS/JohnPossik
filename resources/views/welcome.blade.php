<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

        @fonts

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */ @layer properties{@supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-translate-x:0;--tw-translate-y:0;--tw-translate-z:0;--tw-rotate-x:initial;--tw-rotate-y:initial;--tw-rotate-z:initial;--tw-skew-x:initial;--tw-skew-y:initial;--tw-space-x-reverse:0;--tw-border-style:solid;--tw-leading:initial;--tw-font-weight:initial;--tw-tracking:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial;--tw-duration:initial;--tw-ease:initial;--tw-content:""}}}@layer theme{:root,:host{--font-sans:"Instrument Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--font-serif:ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;--font-mono:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--color-red-50:oklch(97.1% .013 17.38);--color-red-100:oklch(93.6% .032 17.717);--color-red-200:oklch(88.5% .062 18.334);--color-red-300:oklch(80.8% .114 19.571);--color-red-400:oklch(70.4% .191 22.216);--color-red-500:oklch(63.7% .237 25.331);--color-red-600:oklch(57.7% .245 27.325);--color-red-700:oklch(50.5% .213 27.518);--color-red-800:oklch(44.4% .177 26.899);--color-red-900:oklch(39.6% .141 25.723);--color-red-950:oklch(25.8% .092 26.042);--color-orange-50:oklch(98% .016 73.684);--color-orange-100:oklch(95.4% .038 75.164);--color-orange-200:oklch(90.1% .076 70.697);--color-orange-300:oklch(83.7% .128 66.29);--color-orange-400:oklch(75% .183 55.934);--color-orange-500:oklch(70.5% .213 47.604);--color-orange-600:oklch(64.6% .222 41.116);--color-orange-700:oklch(55.3% .195 38.402);--color-orange-800:oklch(47% .157 37.304);--color-orange-900:oklch(40.8% .123 38.172);--color-orange-950:oklch(26.6% .079 36.259);--color-amber-50:oklch(98.7% .022 95.277);--color-amber-100:oklch(96.2% .059 95.617);--color-amber-200:oklch(92.4% .12 95.746);--color-amber-300:oklch(87.9% .169 91.605);--color-amber-400:oklch(82.8% .189 84.429);--color-amber-500:oklch(76.9% .188 70.08);--color-amber-600:oklch(66.6% .179 58.318);--color-amber-700:oklch(55.5% .163 48.998);--color-amber-800:oklch(47.3% .137 46.201);--color-amber-900:oklch(41.4% .112 45.904);--color-amber-950:oklch(27.9% .077 45.635);--color-yellow-50:oklch(98.7% .026 102.212);--color-yellow-100:oklch(97.3% .071 103.193);--color-yellow-200:oklch(94.5% .129 101.54);--color-yellow-300:oklch(90.5% .182 98.111);--color-yellow-400:oklch(85.2% .199 91.936);--color-yellow-500:oklch(79.5% .184 86.047);--color-yellow-600:oklch(68.1% .162 75.834);--color-yellow-700:oklch(55.4% .135 66.442);--color-yellow-800:oklch(47.6% .114 61.907);--color-yellow-900:oklch(42.1% .095 57.708);--color-yellow-950:oklch(28.6% .066 53.813);--color-lime-50:oklch(98.6% .031 120.757);--color-lime-100:oklch(96.7% .067 122.328);--color-lime-200:oklch(93.8% .127 124.321);--color-lime-300:oklch(89.7% .196 126.665);--color-lime-400:oklch(84.1% .238 128.85);--color-lime-500:oklch(76.8% .233 130.85);--color-lime-600:oklch(64.8% .2 131.684);--color-lime-700:oklch(53.2% .157 131.589);--color-lime-800:oklch(45.3% .124 130.933);--color-lime-900:oklch(40.5% .101 131.063);--color-lime-950:oklch(27.4% .072 132.109);--color-green-50:oklch(98.2% .018 155.826);--color-green-100:oklch(96.2% .044 156.743);--color-green-200:oklch(92.5% .084 155.995);--color-green-300:oklch(87.1% .15 154.449);--color-green-400:oklch(79.2% .209 151.711);--color-green-500:oklch(72.3% .219 149.579);--color-green-600:oklch(62.7% .194 149.214);--color-green-700:oklch(52.7% .154 150.069);--color-green-800:oklch(44.8% .119 151.328);--color-green-900:oklch(39.3% .095 152.535);--color-green-950:oklch(26.6% .065 152.934);--color-emerald-50:oklch(97.9% .021 166.113);--color-emerald-100:oklch(95% .052 163.051);--color-emerald-200:oklch(90.5% .093 164.15);--color-emerald-300:oklch(84.5% .143 164.978);--color-emerald-400:oklch(76.5% .177 163.223);--color-emerald-500:oklch(69.6% .17 162.48);--color-emerald-600:oklch(59.6% .145 163.225);--color-emerald-700:oklch(50.8% .118 165.612);--color-emerald-800:oklch(43.2% .095 166.913);--color-emerald-900:oklch(37.8% .077 168.94);--color-emerald-950:oklch(26.2% .051 172.552);--color-teal-50:oklch(98.4% .014 180.72);--color-teal-100:oklch(95.3% .051 180.801);--color-teal-200:oklch(91% .096 180.426);--color-teal-300:oklch(85.5% .138 181.071);--color-teal-400:oklch(77.7% .152 181.912);--color-teal-500:oklch(70.4% .14 182.503);--color-teal-600:oklch(60% .118 184.704);--color-teal-700:oklch(51.1% .096 186.391);--color-teal-800:oklch(43.7% .078 188.216);--color-teal-900:oklch(38.6% .063 188.416);--color-teal-950:oklch(27.7% .046 192.524);--color-cyan-50:oklch(98.4% .019 200.873);--color-cyan-100:oklch(95.6% .045 203.388);--color-cyan-200:oklch(91.7% .08 205.041);--color-cyan-300:oklch(86.5% .127 207.078);--color-cyan-400:oklch(78.9% .154 211.53);--color-cyan-500:oklch(71.5% .143 215.221);--color-cyan-600:oklch(60.9% .126 221.723);--color-cyan-700:oklch(52% .105 223.128);--color-cyan-800:oklch(45% .085 224.283);--color-cyan-900:oklch(39.8% .07 227.392);--color-cyan-950:oklch(30.2% .056 229.695);--color-sky-50:oklch(97.7% .013 236.62);--color-sky-100:oklch(95.1% .026 236.824);--color-sky-200:oklch(90.1% .058 230.902);--color-sky-300:oklch(82.8% .111 230.318);--color-sky-400:oklch(74.6% .16 232.661);--color-sky-500:oklch(68.5% .169 237.323);--color-sky-600:oklch(58.8% .158 241.966);--color-sky-700:oklch(50% .134 242.749);--color-sky-800:oklch(44.3% .11 240.79);--color-sky-900:oklch(39.1% .09 240.876);--color-sky-950:oklch(29.3% .066 243.157);--color-blue-50:oklch(97% .014 254.604);--color-blue-100:oklch(93.2% .032 255.585);--color-blue-200:oklch(88.2% .059 254.128);--color-blue-300:oklch(80.9% .105 251.813);--color-blue-400:oklch(70.7% .165 254.624);--color-blue-500:oklch(62.3% .214 259.815);--color-blue-600:oklch(54.6% .245 262.881);--color-blue-700:oklch(48.8% .243 264.376);--color-blue-800:oklch(42.4% .199 265.638);--color-blue-900:oklch(37.9% .146 265.522);--color-blue-950:oklch(28.2% .091 267.935);--color-indigo-50:oklch(96.2% .018 272.314);--color-indigo-100:oklch(93% .034 272.788);--color-indigo-200:oklch(87% .065 274.039);--color-indigo-300:oklch(78.5% .115 274.713);--color-indigo-400:oklch(67.3% .182 276.935);--color-indigo-500:oklch(58.5% .233 277.117);--color-indigo-600:oklch(51.1% .262 276.966);--color-indigo-700:oklch(45.7% .24 277.023);--color-indigo-800:oklch(39.8% .195 277.366);--color-indigo-900:oklch(35.9% .144 278.697);--color-indigo-950:oklch(25.7% .09 281.288);--color-violet-50:oklch(96.9% .016 293.756);--color-violet-100:oklch(94.3% .029 294.588);--color-violet-200:oklch(89.4% .057 293.283);--color-violet-300:oklch(81.1% .111 293.571);--color-violet-400:oklch(70.2% .183 293.541);--color-violet-500:oklch(60.6% .25 292.717);--color-violet-600:oklch(54.1% .281 293.009);--color-violet-700:oklch(49.1% .27 292.581);--color-violet-800:oklch(43.2% .232 292.759);--color-violet-900:oklch(38% .189 293.745);--color-violet-950:oklch(28.3% .141 291.089);--color-purple-50:oklch(97.7% .014 308.299);--color-purple-100:oklch(94.6% .033 307.174);--color-purple-200:oklch(90.2% .063 306.703);--color-purple-300:oklch(82.7% .119 306.383);--color-purple-400:oklch(71.4% .203 305.504);--color-purple-500:oklch(62.7% .265 303.9);--color-purple-600:oklch(55.8% .288 302.321);--color-purple-700:oklch(49.6% .265 301.924);--color-purple-800:oklch(43.8% .218 303.724);--color-purple-900:oklch(38.1% .176 304.987);--color-purple-950:oklch(29.1% .149 302.717);--color-fuchsia-50:oklch(97.7% .017 320.058);--color-fuchsia-100:oklch(95.2% .037 318.852);--color-fuchsia-200:oklch(90.3% .076 319.62);--color-fuchsia-300:oklch(83.3% .145 321.434);--color-fuchsia-400:oklch(74% .238 322.16);--color-fuchsia-500:oklch(66.7% .295 322.15);--color-fuchsia-600:oklch(59.1% .293 322.896);--color-fuchsia-700:oklch(51.8% .253 323.949);--color-fuchsia-800:oklch(45.2% .211 324.591);--color-fuchsia-900:oklch(40.1% .17 325.612);--color-fuchsia-950:oklch(29.3% .136 325.661);--color-pink-50:oklch(97.1% .014 343.198);--color-pink-100:oklch(94.8% .028 342.258);--color-pink-200:oklch(89.9% .061 343.231);--color-pink-300:oklch(82.3% .12 346.018);--color-pink-400:oklch(71.8% .202 349.761);--color-pink-500:oklch(65.6% .241 354.308);--color-pink-600:oklch(59.2% .249 .584);--color-pink-700:oklch(52.5% .223 3.958);--color-pink-800:oklch(45.9% .187 3.815);--color-pink-900:oklch(40.8% .153 2.432);--color-pink-950:oklch(28.4% .109 3.907);--color-rose-50:oklch(96.9% .015 12.422);--color-rose-100:oklch(94.1% .03 12.58);--color-rose-200:oklch(89.2% .058 10.001);--color-rose-300:oklch(81% .117 11.638);--color-rose-400:oklch(71.2% .194 13.428);--color-rose-500:oklch(64.5% .246 16.439);--color-rose-600:oklch(58.6% .253 17.585);--color-rose-700:oklch(51.4% .222 16.935);--color-rose-800:oklch(45.5% .188 13.697);--color-rose-900:oklch(41% .159 10.272);--color-rose-950:oklch(27.1% .105 12.094);--color-slate-50:oklch(98.4% .003 247.858);--color-slate-100:oklch(96.8% .007 247.896);--color-slate-200:oklch(92.9% .013 255.508);--color-slate-300:oklch(86.9% .022 252.894);--color-slate-400:oklch(70.4% .04 256.788);--color-slate-500:oklch(55.4% .046 257.417);--color-slate-600:oklch(44.6% .043 257.281);--color-slate-700:oklch(37.2% .044 257.287);--color-slate-800:oklch(27.9% .041 260.031);--color-slate-900:oklch(20.8% .042 265.755);--color-slate-950:oklch(12.9% .042 264.695);--color-gray-50:oklch(98.5% .002 247.839);--color-gray-100:oklch(96.7% .003 264.542);--color-gray-200:oklch(92.8% .006 264.531);--color-gray-300:oklch(87.2% .01 258.338);--color-gray-400:oklch(70.7% .022 261.325);--color-gray-500:oklch(55.1% .027 264.364);--color-gray-600:oklch(44.6% .03 256.802);--color-gray-700:oklch(37.3% .034 259.733);--color-gray-800:oklch(27.8% .033 256.848);--color-gray-900:oklch(21% .034 264.665);--color-gray-950:oklch(13% .028 261.692);--color-zinc-50:oklch(98.5% 0 0);--color-zinc-100:oklch(96.7% .001 286.375);--color-zinc-200:oklch(92% .004 286.32);--color-zinc-300:oklch(87.1% .006 286.286);--color-zinc-400:oklch(70.5% .015 286.067);--color-zinc-500:oklch(55.2% .016 285.938);--color-zinc-600:oklch(44.2% .017 285.786);--color-zinc-700:oklch(37% .013 285.805);--color-zinc-800:oklch(27.4% .006 286.033);--color-zinc-900:oklch(21% .006 285.885);--color-zinc-950:oklch(14.1% .005 285.823);--color-neutral-50:oklch(98.5% 0 0);--color-neutral-100:oklch(97% 0 0);--color-neutral-200:oklch(92.2% 0 0);--color-neutral-300:oklch(87% 0 0);--color-neutral-400:oklch(70.8% 0 0);--color-neutral-500:oklch(55.6% 0 0);--color-neutral-600:oklch(43.9% 0 0);--color-neutral-700:oklch(37.1% 0 0);--color-neutral-800:oklch(26.9% 0 0);--color-neutral-900:oklch(20.5% 0 0);--color-neutral-950:oklch(14.5% 0 0);--color-stone-50:oklch(98.5% .001 106.423);--color-stone-100:oklch(97% .001 106.424);--color-stone-200:oklch(92.3% .003 48.717);--color-stone-300:oklch(86.9% .005 56.366);--color-stone-400:oklch(70.9% .01 56.259);--color-stone-500:oklch(55.3% .013 58.071);--color-stone-600:oklch(44.4% .011 73.639);--color-stone-700:oklch(37.4% .01 67.558);--color-stone-800:oklch(26.8% .007 34.298);--color-stone-900:oklch(21.6% .006 56.043);--color-stone-950:oklch(14.7% .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1 / .75);--text-sm:.875rem;--text-sm--line-height:calc(1.25 / .875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75 / 1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75 / 1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2 / 1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5 / 2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a, 0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a, 0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a, 0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4, 0, 1, 1);--ease-out:cubic-bezier(0, 0, .2, 1);--ease-in-out:cubic-bezier(.4, 0, .2, 1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0, 0, .2, 1) infinite;--animate-pulse:pulse 2s cubic-bezier(.4, 0, .6, 1) infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16 / 9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4, 0, .2, 1);--default-font-family:var(--font-sans);--default-mono-font-family:var(--font-mono)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1}@supports (not ((-webkit-appearance:-apple-pay-button))) or (contain-intrinsic-size:1px){::placeholder{color:currentColor}@supports (color:color-mix(in lab,red,red)){::placeholder{color:color-mix(in oklab,currentcolor 50%,transparent)}}}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}::-webkit-calendar-picker-indicator{line-height:1}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.fixed{position:fixed}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing) * 0)}.start{inset-inline-start:var(--spacing)}.top-0{top:calc(var(--spacing) * 0)}.right-0{right:calc(var(--spacing) * 0)}.container{width:100%}@media(min-width:40rem){.container{max-width:40rem}}@media(min-width:48rem){.container{max-width:48rem}}@media(min-width:64rem){.container{max-width:64rem}}@media(min-width:80rem){.container{max-width:80rem}}@media(min-width:96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.-mt-\[6\.6rem\]{margin-top:-6.6rem}.-mt-px{margin-top:-1px}.mt-2{margin-top:calc(var(--spacing) * 2)}.mt-4{margin-top:calc(var(--spacing) * 4)}.mt-6{margin-top:calc(var(--spacing) * 6)}.mt-8{margin-top:calc(var(--spacing) * 8)}.mr-2{margin-right:calc(var(--spacing) * 2)}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing) * 1)}.mb-2{margin-bottom:calc(var(--spacing) * 2)}.mb-4{margin-bottom:calc(var(--spacing) * 4)}.mb-6{margin-bottom:calc(var(--spacing) * 6)}.-ml-8{margin-left:calc(var(--spacing) * -8)}.-ml-px{margin-left:-1px}.ml-1{margin-left:calc(var(--spacing) * 1)}.ml-2{margin-left:calc(var(--spacing) * 2)}.ml-4{margin-left:calc(var(--spacing) * 4)}.ml-12{margin-left:calc(var(--spacing) * 12)}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/364\]{aspect-ratio:335/364}.h-1{height:calc(var(--spacing) * 1)}.h-1\.5{height:calc(var(--spacing) * 1.5)}.h-2{height:calc(var(--spacing) * 2)}.h-2\.5{height:calc(var(--spacing) * 2.5)}.h-3{height:calc(var(--spacing) * 3)}.h-3\.5{height:calc(var(--spacing) * 3.5)}.h-5{height:calc(var(--spacing) * 5)}.h-8{height:calc(var(--spacing) * 8)}.h-14{height:calc(var(--spacing) * 14)}.h-14\.5{height:calc(var(--spacing) * 14.5)}.h-16{height:calc(var(--spacing) * 16)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing) * 1)}.w-1\.5{width:calc(var(--spacing) * 1.5)}.w-2{width:calc(var(--spacing) * 2)}.w-2\.5{width:calc(var(--spacing) * 2.5)}.w-3{width:calc(var(--spacing) * 3)}.w-3\.5{width:calc(var(--spacing) * 3.5)}.w-5{width:calc(var(--spacing) * 5)}.w-8{width:calc(var(--spacing) * 8)}.w-\[438px\]{width:438px}.w-auto{width:auto}.w-full{width:100%}.max-w-6xl{max-width:var(--container-6xl)}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.max-w-xl{max-width:var(--container-xl)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing) * 0);translate:var(--tw-translate-x) var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x,) var(--tw-rotate-y,) var(--tw-rotate-z,) var(--tw-skew-x,) var(--tw-skew-y,)}.cursor-default{cursor:default}.cursor-not-allowed{cursor:not-allowed}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.justify-items-center{justify-items:center}.gap-2{gap:calc(var(--spacing) * 2)}.gap-3{gap:calc(var(--spacing) * 3)}.gap-4{gap:calc(var(--spacing) * 4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing) * 1) * var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing) * 1) * calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-l-md{border-top-left-radius:var(--radius-md);border-bottom-left-radius:var(--radius-md)}.rounded-r-md{border-top-right-radius:var(--radius-md);border-bottom-right-radius:var(--radius-md)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-t{border-top-style:var(--tw-border-style);border-top-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-gray-200{border-color:var(--color-gray-200)}.border-gray-300{border-color:var(--color-gray-300)}.border-gray-400{border-color:var(--color-gray-400)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-gray-100{background-color:var(--color-gray-100)}.bg-gray-200{background-color:var(--color-gray-200)}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing) * 6)}.px-2{padding-inline:calc(var(--spacing) * 2)}.px-4{padding-inline:calc(var(--spacing) * 4)}.px-5{padding-inline:calc(var(--spacing) * 5)}.px-6{padding-inline:calc(var(--spacing) * 6)}.py-1{padding-block:calc(var(--spacing) * 1)}.py-1\.5{padding-block:calc(var(--spacing) * 1.5)}.py-2{padding-block:calc(var(--spacing) * 2)}.py-4{padding-block:calc(var(--spacing) * 4)}.pt-8{padding-top:calc(var(--spacing) * 8)}.pb-6{padding-bottom:calc(var(--spacing) * 6)}.pb-12{padding-bottom:calc(var(--spacing) * 12)}.text-center{text-align:center}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-5{--tw-leading:calc(var(--spacing) * 5);line-height:calc(var(--spacing) * 5)}.leading-7{--tw-leading:calc(var(--spacing) * 7);line-height:calc(var(--spacing) * 7)}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.tracking-wider{--tw-tracking:var(--tracking-wider);letter-spacing:var(--tracking-wider)}.text-\[\#1B1B18\],.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F3BEC7\]{color:#f3bec7}.text-\[\#F8B803\]{color:#f8b803}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-gray-200{color:var(--color-gray-200)}.text-gray-300{color:var(--color-gray-300)}.text-gray-400{color:var(--color-gray-400)}.text-gray-500{color:var(--color-gray-500)}.text-gray-600{color:var(--color-gray-600)}.text-gray-700{color:var(--color-gray-700)}.text-gray-800{color:var(--color-gray-800)}.text-gray-900{color:var(--color-gray-900)}.text-white{color:var(--color-white)}.uppercase{text-transform:uppercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.mix-blend-color{mix-blend-mode:color}.mix-blend-darken{mix-blend-mode:darken}.mix-blend-hard-light{mix-blend-mode:hard-light}.mix-blend-multiply{mix-blend-mode:multiply}.shadow{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008), 0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 3px 0 var(--tw-shadow-color,#0000001a), 0 1px 2px -1px var(--tw-shadow-color,#0000001a);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.ring-gray-300{--tw-ring-color:var(--color-gray-300)}.filter{filter:var(--tw-blur,) var(--tw-brightness,) var(--tw-contrast,) var(--tw-grayscale,) var(--tw-hue-rotate,) var(--tw-invert,) var(--tw-saturate,) var(--tw-sepia,) var(--tw-drop-shadow,)}.transition{transition-property:color,background-color,border-color,outline-color,text-decoration-color,fill,stroke,--tw-gradient-from,--tw-gradient-via,--tw-gradient-to,opacity,box-shadow,transform,translate,scale,rotate,filter,-webkit-backdrop-filter,backdrop-filter,display,content-visibility,overlay,pointer-events;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-200{transition-delay:.2s}.delay-300{transition-delay:.3s}.delay-400{transition-delay:.4s}.duration-150{--tw-duration:.15s;transition-duration:.15s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.ease-in-out{--tw-ease:var(--ease-in-out);transition-timing-function:var(--ease-in-out)}.\[--stroke-color\:\#1B1B18\]{--stroke-color:#1b1b18}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing) * 0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing) * 0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media(hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-gray-100:hover{background-color:var(--color-gray-100)}.hover\:text-gray-400:hover{color:var(--color-gray-400)}.hover\:text-gray-700:hover{color:var(--color-gray-700)}}.focus\:border-blue-300:focus{border-color:var(--color-blue-300)}.focus\:ring:focus{--tw-ring-shadow:var(--tw-ring-inset,) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color,currentcolor);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.focus\:outline-none:focus{--tw-outline-style:none;outline-style:none}.active\:bg-gray-100:active{background-color:var(--color-gray-100)}.active\:text-gray-500:active{color:var(--color-gray-500)}.active\:text-gray-700:active{color:var(--color-gray-700)}.active\:text-gray-800:active{color:var(--color-gray-800)}@media(min-width:40rem){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:flex-1{flex:1}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:justify-start{justify-content:flex-start}.sm\:gap-2{gap:calc(var(--spacing) * 2)}.sm\:px-6{padding-inline:calc(var(--spacing) * 6)}.sm\:pt-0{padding-top:calc(var(--spacing) * 0)}}@media(min-width:64rem){.lg\:mt-10{margin-top:calc(var(--spacing) * 10)}.lg\:mb-0{margin-bottom:calc(var(--spacing) * 0)}.lg\:mb-6{margin-bottom:calc(var(--spacing) * 6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing) * 0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing) * 8)}.lg\:p-20{padding:calc(var(--spacing) * 20)}.lg\:px-8{padding-inline:calc(var(--spacing) * 8)}.lg\:pb-10{padding-bottom:calc(var(--spacing) * 10)}}.rtl\:flex-row-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media(prefers-color-scheme:dark){.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-gray-600{border-color:var(--color-gray-600)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-gray-700{background-color:var(--color-gray-700)}.dark\:bg-gray-800{background-color:var(--color-gray-800)}.dark\:bg-gray-900{background-color:var(--color-gray-900)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#4B0600\]{color:#4b0600}.dark\:text-\[\#391800\]{color:#391800}.dark\:text-\[\#733000\]{color:#733000}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-gray-200{color:var(--color-gray-200)}.dark\:text-gray-300{color:var(--color-gray-300)}.dark\:text-gray-400{color:var(--color-gray-400)}.dark\:text-gray-600{color:var(--color-gray-600)}.dark\:mix-blend-hard-light{mix-blend-mode:hard-light}.dark\:mix-blend-normal{mix-blend-mode:normal}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:\[--stroke-color\:\#FF750F\]{--stroke-color:#ff750f}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media(hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-gray-900:hover{background-color:var(--color-gray-900)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:text-gray-200:hover{color:var(--color-gray-200)}.dark\:hover\:text-gray-300:hover{color:var(--color-gray-300)}}.dark\:focus\:border-blue-700:focus{border-color:var(--color-blue-700)}.dark\:focus\:border-blue-800:focus{border-color:var(--color-blue-800)}.dark\:active\:bg-gray-700:active{background-color:var(--color-gray-700)}.dark\:active\:text-gray-300:active{color:var(--color-gray-300)}}@starting-style{.starting\:opacity-0{opacity:0}}@media(prefers-reduced-motion:no-preference){@starting-style{.motion-safe\:starting\:-translate-x-\[26px\]{--tw-translate-x: -26px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[51px\]{--tw-translate-x: -51px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[78px\]{--tw-translate-x: -78px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:-translate-x-\[102px\]{--tw-translate-x: -102px ;translate:var(--tw-translate-x) var(--tw-translate-y)}}@starting-style{.motion-safe\:starting\:translate-y-6{--tw-translate-y:calc(var(--spacing) * 6);translate:var(--tw-translate-x) var(--tw-translate-y)}}}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false}@property --tw-rotate-y{syntax:"*";inherits:false}@property --tw-rotate-z{syntax:"*";inherits:false}@property --tw-skew-x{syntax:"*";inherits:false}@property --tw-skew-y{syntax:"*";inherits:false}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-tracking{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-drop-shadow-color{syntax:"*";inherits:false}@property --tw-drop-shadow-alpha{syntax:"<percentage>";inherits:false;initial-value:100%}@property --tw-drop-shadow-size{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-ease{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}
            </style>
        @endif
    </head>
    <body class="bg-black">
        <header class="fixed top-0 left-0 w-full z-50 bg-black/60 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
                <a href="/" class="flex items-center gap-3">
                    <img src="/logo.webp" alt="John Possik Kapsalon" class="h-10 w-auto">
                    <div>
                        <span class="block text-white font-display text-lg font-bold leading-tight">John Possik</span>
                        <span class="block text-primary font-sans text-[11px] uppercase tracking-widest">Doetinchem</span>
                    </div>
                </a>
                {{-- Desktop nav --}}
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#" class="text-white/70 font-sans text-xs uppercase tracking-widest hover:text-white transition">Home</a>
                    <a href="#diensten" class="text-white/70 font-sans text-xs uppercase tracking-widest hover:text-white transition">Diensten</a>
                    <a href="#" class="text-white/70 font-sans text-xs uppercase tracking-widest hover:text-white transition">Webshop</a>
                    <a href="#over-ons" class="text-white/70 font-sans text-xs uppercase tracking-widest hover:text-white transition">Over Ons</a>
                    <a href="#" class="text-white/70 font-sans text-xs uppercase tracking-widest hover:text-white transition">Contact</a>
                    <div class="flex items-center gap-4">
                        <a href="#" target="_blank" class="text-white/70 hover:text-primary transition"><svg class="w-4 h-4" viewBox="0 0 640 640" fill="currentColor"><path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z"/></svg></a>
                        <a href="#" target="_blank" class="text-white/70 hover:text-primary transition"><svg class="w-4 h-4" viewBox="0 0 640 640" fill="currentColor"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg></a>
                        <a href="#" target="_blank" class="text-white/70 hover:text-primary transition"><svg class="w-4 h-4" viewBox="0 0 640 640" fill="currentColor"><path d="M544.5 273.9C500.5 274 457.5 260.3 421.7 234.7L421.7 413.4C421.7 446.5 411.6 478.8 392.7 506C373.8 533.2 347.1 554 316.1 565.6C285.1 577.2 251.3 579.1 219.2 570.9C187.1 562.7 158.3 545 136.5 520.1C114.7 495.2 101.2 464.1 97.5 431.2C93.8 398.3 100.4 365.1 116.1 336C131.8 306.9 156.1 283.3 185.7 268.3C215.3 253.3 248.6 247.8 281.4 252.3L281.4 342.2C266.4 337.5 250.3 337.6 235.4 342.6C220.5 347.6 207.5 357.2 198.4 369.9C189.3 382.6 184.4 398 184.5 413.8C184.6 429.6 189.7 444.8 199 457.5C208.3 470.2 221.4 479.6 236.4 484.4C251.4 489.2 267.5 489.2 282.4 484.3C297.3 479.4 310.4 469.9 319.6 457.2C328.8 444.5 333.8 429.1 333.8 413.4L333.8 64L421.8 64C421.7 71.4 422.4 78.9 423.7 86.2C426.8 102.5 433.1 118.1 442.4 131.9C451.7 145.7 463.7 157.5 477.6 166.5C497.5 179.6 520.8 186.6 544.6 186.6L544.6 274z"/></svg></a>
                    </div>
                    <a href="#" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-[#d4c4ad] transition">Afspraak maken</a>
                    <a href="#" class="relative text-white/70 hover:text-primary transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                        <span class="absolute -top-1.5 -right-1.5 bg-primary text-black text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                    </a>
                </nav>

                {{-- Mobiel: winkelwagen + hamburger --}}
                <div class="flex items-center gap-4 md:hidden">
                    <a href="#" class="relative text-white/70 hover:text-primary transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                        <span class="absolute -top-1.5 -right-1.5 bg-primary text-black text-[9px] font-bold w-4 h-4 rounded-full flex items-center justify-center">0</span>
                    </a>
                    <button onclick="document.getElementById('mobile-menu').classList.toggle('translate-x-full')" class="text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/></svg>
                    </button>
                </div>
            </div>
        </header>

        {{-- Fullscreen mobiel menu --}}
        <div id="mobile-menu" class="fixed inset-0 z-[60] bg-black translate-x-full transition-transform duration-300 flex flex-col">
            <div class="flex items-center justify-between px-4 py-4">
                <a href="/" class="flex items-center gap-3">
                    <img src="/logo.webp" alt="John Possik Kapsalon" class="h-10 w-auto">
                    <div>
                        <span class="block text-white font-display text-lg font-bold leading-tight">John Possik</span>
                        <span class="block text-primary font-sans text-[11px] uppercase tracking-widest">Doetinchem</span>
                    </div>
                </a>
                <button onclick="document.getElementById('mobile-menu').classList.toggle('translate-x-full')" class="text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <nav class="flex flex-col items-center justify-center flex-1 gap-8">
                <a href="#" onclick="document.getElementById('mobile-menu').classList.add('translate-x-full')" class="text-white font-sans text-lg uppercase tracking-widest hover:text-primary transition">Home</a>
                <a href="#diensten" onclick="document.getElementById('mobile-menu').classList.add('translate-x-full')" class="text-white font-sans text-lg uppercase tracking-widest hover:text-primary transition">Diensten</a>
                <a href="#" onclick="document.getElementById('mobile-menu').classList.add('translate-x-full')" class="text-white font-sans text-lg uppercase tracking-widest hover:text-primary transition">Webshop</a>
                <a href="#over-ons" onclick="document.getElementById('mobile-menu').classList.add('translate-x-full')" class="text-white font-sans text-lg uppercase tracking-widest hover:text-primary transition">Over Ons</a>
                <a href="#faq" onclick="document.getElementById('mobile-menu').classList.add('translate-x-full')" class="text-white font-sans text-lg uppercase tracking-widest hover:text-primary transition">FAQ</a>
                <a href="#" onclick="document.getElementById('mobile-menu').classList.add('translate-x-full')" class="text-white font-sans text-lg uppercase tracking-widest hover:text-primary transition">Contact</a>
                <a href="#" class="bg-primary text-black font-sans font-semibold text-sm uppercase tracking-widest px-8 py-4 rounded hover:bg-[#d4c4ad] transition mt-4">Afspraak maken</a>
            </nav>
            <div class="flex items-center justify-center gap-6 pb-10">
                <a href="#" target="_blank" class="text-white/40 hover:text-primary transition"><svg class="w-5 h-5" viewBox="0 0 640 640" fill="currentColor"><path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z"/></svg></a>
                <a href="#" target="_blank" class="text-white/40 hover:text-primary transition"><svg class="w-5 h-5" viewBox="0 0 640 640" fill="currentColor"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg></a>
                <a href="#" target="_blank" class="text-white/40 hover:text-primary transition"><svg class="w-5 h-5" viewBox="0 0 640 640" fill="currentColor"><path d="M544.5 273.9C500.5 274 457.5 260.3 421.7 234.7L421.7 413.4C421.7 446.5 411.6 478.8 392.7 506C373.8 533.2 347.1 554 316.1 565.6C285.1 577.2 251.3 579.1 219.2 570.9C187.1 562.7 158.3 545 136.5 520.1C114.7 495.2 101.2 464.1 97.5 431.2C93.8 398.3 100.4 365.1 116.1 336C131.8 306.9 156.1 283.3 185.7 268.3C215.3 253.3 248.6 247.8 281.4 252.3L281.4 342.2C266.4 337.5 250.3 337.6 235.4 342.6C220.5 347.6 207.5 357.2 198.4 369.9C189.3 382.6 184.4 398 184.5 413.8C184.6 429.6 189.7 444.8 199 457.5C208.3 470.2 221.4 479.6 236.4 484.4C251.4 489.2 267.5 489.2 282.4 484.3C297.3 479.4 310.4 469.9 319.6 457.2C328.8 444.5 333.8 429.1 333.8 413.4L333.8 64L421.8 64C421.7 71.4 422.4 78.9 423.7 86.2C426.8 102.5 433.1 118.1 442.4 131.9C451.7 145.7 463.7 157.5 477.6 166.5C497.5 179.6 520.8 186.6 544.6 186.6L544.6 274z"/></svg></a>
            </div>
        </div>
        <div class="bg-black relative">
            <div class="w-full h-fit p-3 relative z-2">
                <div class="w-full h-[90vh] md:h-[80vh] z-2 relative overflow-visible">
                    <div class="w-full h-full absolute z-3 bg-black/80"></div>
                    <video autoplay playsinline webkit-playsinline muted loop preload="auto" class="absolute z-2 w-full h-full object-cover rounded"><source src="/assets/intro.mp4" type="video/mp4"></video>
                    <div class="absolute z-5 inset-0 flex items-center justify-center">
                        <div class="max-w-7xl w-full text-left px-4">
                            <p class="text-primary uppercase tracking-widest text-sm mb-6 font-sans font-medium">Kapsalon in Doetinchem</p>
                            <h1 class="font-display text-3xl md:text-5xl lg:text-6xl font-bold text-white tracking-wide">Dé Kapsalon voor<br><span class="text-primary">mannen en vrouwen</span><br>met stijl.</h1>
                            <p class="text-white/70 font-sans text-sm md:text-base max-w-xl mt-4 md:mt-6 leading-relaxed">Al sinds 2020 dé plek in Doetinchem waar vakmanschap, persoonlijk advies en oog voor detail samenkomen. Voor een knipbeurt, styling of kleurbehandeling. Bij John Possik ben je in goede handen.</p>
                            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mt-6 md:mt-8">
                                <a href="#" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                                <a href="#" class="rounded border border-white text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Onze Diensten</a>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-7xl w-full absolute z-4 left-0 right-0 mx-auto bottom-0 translate-y-1/2 px-4">
                        <div class="w-full bg-primary rounded flex flex-col md:flex-row items-center justify-between px-6 md:px-8 py-4 md:py-5 gap-4">
                            <div class="flex items-center gap-3">
                                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <span class="text-black font-sans font-semibold text-sm uppercase tracking-widest">Snel een afspraak maken?</span>
                            </div>
                            <div class="flex items-center gap-3 md:gap-4 w-full md:w-auto">
                                <a href="#" class="flex-1 md:flex-none text-center bg-black text-primary font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-black/80 transition">Bel Ons</a>
                                <a href="#" class="flex-1 md:flex-none text-center border border-black text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 hover:bg-black/10 transition">Reserveren</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-4 pt-10 pb-16 md:pb-32 relative z-10">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 border border-white/5 rounded p-6 md:p-8">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary rounded-full">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Vakmanschap</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Jarenlange ervaring in knippen, stylen en kleuren voor een resultaat dat bij jou past.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary rounded-full">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Zonder Wachten</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Plan eenvoudig online of bel direct. Wij werken op afspraak zodat jij nooit hoeft te wachten.</p>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center border border-primary rounded-full">
                            <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </div>
                        <h3 class="text-white font-sans font-semibold text-sm uppercase tracking-widest mb-2">Persoonlijk Advies</h3>
                        <p class="text-white/60 font-sans text-sm leading-relaxed">Elke klant is uniek. Wij luisteren naar jouw wensen en geven eerlijk advies over jouw haar.</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4"><div class="border-t border-white/5"></div></div>

        {{-- Diensten --}}
        <section id="diensten" class="py-16 md:py-32">
            <div class="max-w-7xl mx-auto px-4">
                <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Wat wij doen</p>
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-16 gap-6">
                    <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide">Onze Diensten & Producten</h2>
                    <div class="flex gap-3 flex-shrink-0">
                        <a href="#" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-[#d4c4ad] transition">Afspraak maken</a>
                        <a href="tel:+31612345678" class="border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:border-primary hover:text-primary transition">Bel nu</a>
                    </div>
                </div>

                {{-- Diensten grid --}}
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 auto-rows-[280px]">
                    {{-- Knippen - groot blok --}}
                    <a href="#" class="md:col-span-2 md:row-span-2 relative rounded overflow-hidden group border-2 border-transparent hover:border-primary transition">
                        <img src="/images/salon1.jpeg" alt="Knippen & Stylen" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="relative z-10 h-full flex flex-col justify-end p-8">
                            <h3 class="font-display text-2xl font-bold text-white mb-2">Knippen & Stylen</h3>
                            <p class="text-white/70 font-sans text-sm leading-relaxed">Voor dames, heren en kinderen. Van een klassieke coupe tot een moderne look. Wij luisteren naar jouw wensen en creëren een stijl die bij jou past.</p>
                            <div class="flex gap-3 mt-4">
                                <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Dames</span>
                                <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Heren</span>
                                <span class="text-xs text-primary font-sans uppercase tracking-widest border border-primary/30 px-3 py-1 rounded-full">Kinderen</span>
                            </div>
                        </div>
                    </a>

                    {{-- Kleuren & Verven --}}
                    <a href="#" class="md:col-span-2 relative rounded overflow-hidden group border-2 border-transparent hover:border-primary transition">
                        <img src="/images/salon2.jpeg" alt="Kleuren & Verven" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="relative z-10 h-full flex flex-col justify-end p-8">
                            <h3 class="font-display text-2xl font-bold text-white mb-2">Kleuren & Verven</h3>
                            <p class="text-white/70 font-sans text-sm leading-relaxed">Highlights, lowlights, balayage of volledige kleuring. Wij werken met hoogwaardige producten voor een prachtig en langdurig resultaat.</p>
                        </div>
                    </a>

                    {{-- Behandelingen --}}
                    <a href="#" class="md:col-span-2 relative rounded overflow-hidden group border-2 border-transparent hover:border-primary transition">
                        <img src="/images/salon3.jpeg" alt="Behandelingen" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                        <div class="relative z-10 h-full flex flex-col justify-end p-8">
                            <h3 class="font-display text-xl font-bold text-white mb-2">Behandelingen</h3>
                            <p class="text-white/70 font-sans text-sm leading-relaxed">Plasma, botox caviar en deep conditioning voor gezond en stralend haar.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        {{-- Over John --}}
        <section id="over-ons" class="py-16 md:py-32 bg-[#050504] relative overflow-hidden">
            <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-[radial-gradient(circle,_rgba(187,169,143,0.06)_0%,_transparent_70%)]"></div>
            <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <img src="/images/salon-main.jpeg" alt="John Possik Kapsalon Doetinchem" class="w-full rounded">
                        <div class="absolute -bottom-6 -left-6 w-52 h-52 rounded overflow-hidden border-4 border-black hidden lg:block">
                            <img src="/assets/john.webp" alt="John Possik" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Over de eigenaar</p>
                        <h2 class="font-display text-4xl font-bold text-white tracking-wide mb-8">John Possik</h2>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-6">In 2020 opende John Possik de deuren van zijn eigen kapsalon aan de Dr. Huber Noodtstraat 24 in Doetinchem. Gedreven door een passie voor het vak en een oog voor detail, bouwde hij een salon waar kwaliteit en persoonlijke aandacht centraal staan.</p>
                        <p class="text-white/70 font-sans text-base leading-relaxed mb-8">Of je nu komt voor een knipbeurt, kleuring of styling. John neemt de tijd om te luisteren naar jouw wensen en geeft eerlijk advies. Dat persoonlijke is wat klanten steeds weer terugbrengt.</p>
                        <div class="flex flex-wrap gap-6 md:gap-8 mb-8">
                            <div>
                                <span class="font-display text-2xl font-bold text-primary">2020</span>
                                <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-1">Opgericht</span>
                            </div>
                            <div>
                                <span class="font-display text-2xl font-bold text-primary">1000+</span>
                                <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-1">Tevreden klanten</span>
                            </div>
                            <div>
                                <span class="font-display text-2xl font-bold text-primary">4.9</span>
                                <span class="block text-white/50 font-sans text-xs uppercase tracking-widest mt-1">Google score</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 md:gap-4">
                            <a href="#" class="rounded bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-[#d4c4ad] transition text-center">Maak een Afspraak</a>
                            <a href="#" class="rounded border border-white/30 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-4 hover:bg-white/10 transition text-center">Meer over ons</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Producten --}}
        <section id="producten" class="py-16 md:py-32">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-end justify-between mb-8 md:mb-16">
                    <div>
                        <p class="text-primary uppercase tracking-widest text-sm mb-4 font-sans font-medium">Webshop</p>
                        <h2 class="font-display text-3xl md:text-4xl font-bold text-white tracking-wide">Onze Producten</h2>
                    </div>
                    <div class="hidden md:flex gap-2">
                        <button onclick="document.getElementById('carousel').scrollBy({left: -300, behavior: 'smooth'})" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:border-primary hover:text-primary transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <button onclick="document.getElementById('carousel').scrollBy({left: 300, behavior: 'smooth'})" class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:border-primary hover:text-primary transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>

                <div id="carousel" class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-hide pb-4" style="-ms-overflow-style:none;scrollbar-width:none;">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="w-[70vw] sm:w-[calc(50%-8px)] lg:w-[calc(25%-12px)] flex-shrink-0 snap-start rounded overflow-hidden border border-white/10 hover:border-primary transition group bg-[#0a0a09]">
                        <div class="aspect-square overflow-hidden relative bg-[#111]">
                            <img src="/assets/john-bril.webp" alt="JP Smooth Vision - Black Silver" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                        <div class="p-4">
                            <span class="text-primary font-sans text-[10px] uppercase tracking-widest">JP Eyewear</span>
                            <h3 class="text-white font-sans font-semibold text-sm mt-1">Smooth Vision - Black Silver</h3>
                            <p class="text-white/40 font-sans text-xs mt-0.5">Unisex</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-white font-display text-lg font-bold">€49,95</span>
                            </div>
                            <button class="w-full mt-3 bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest py-3 rounded hover:bg-[#d4c4ad] transition flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 100 4 2 2 0 000-4z"/></svg>
                                In Winkelmand
                            </button>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="w-full h-[200px] md:h-[250px] relative overflow-hidden rounded mt-6">
                    <div class="w-full h-full absolute z-2 bg-black/50"></div>
                    <video autoplay playsinline webkit-playsinline muted loop preload="auto" class="w-full h-full object-cover absolute z-1"><source src="/assets/intro2.mp4" type="video/mp4"></video>
                    <div class="absolute inset-0 z-3 flex flex-col md:flex-row items-center justify-center md:justify-between px-6 md:px-12 gap-4 text-center md:text-left">
                        <div>
                            <h3 class="text-white font-display text-xl md:text-3xl font-bold">Ontdek onze volledige collectie</h3>
                            <p class="text-white/60 font-sans text-xs md:text-sm mt-2">Premium producten voor de moderne man & vrouw</p>
                        </div>
                        <a href="/store" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 md:px-8 py-3 md:py-4 rounded hover:bg-[#d4c4ad] transition flex-shrink-0">
                            Bekijk Alles
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- FAQ Sectie --}}
        <section id="faq" class="py-16 md:py-32">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex flex-col lg:flex-row gap-16">
                    <div class="lg:w-1/3">
                        <span class="text-primary font-sans text-[11px] uppercase tracking-widest">Veelgestelde vragen</span>
                        <h2 class="text-white font-display text-4xl md:text-5xl font-bold mt-4">Alles wat je wilt weten</h2>
                        <p class="text-white/50 font-sans text-sm mt-4 leading-relaxed">Heb je een vraag die hier niet bij staat? Neem gerust contact met ons op.</p>
                        <div class="flex flex-col sm:flex-row gap-3 mt-6">
                            <a href="#" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-[#d4c4ad] transition text-center">Contact opnemen</a>
                            <a href="tel:+31612345678" class="border border-white/20 text-white font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:border-primary hover:text-primary transition text-center">Bel nu</a>
                        </div>
                    </div>
                    <div class="lg:w-2/3 space-y-0">
                        @php
                            $faqs = [
                                ['q' => 'Moet ik een afspraak maken?', 'a' => 'Je bent altijd welkom om langs te lopen, maar om wachttijden te voorkomen raden wij aan om vooraf een afspraak te maken via onze website of telefonisch.'],
                                ['q' => 'Wat zijn jullie openingstijden?', 'a' => 'Wij zijn geopend van maandag tot en met zaterdag. Maandag t/m vrijdag van 09:00 tot 18:00 en zaterdag van 09:00 tot 17:00. Op zondag zijn wij gesloten.'],
                                ['q' => 'Kan ik producten ook online bestellen?', 'a' => 'Ja, via onze webshop kun je al onze producten bestellen. We verzenden door heel Nederland en je kunt ook kiezen voor afhalen in de salon.'],
                                ['q' => 'Zijn jullie gespecialiseerd in bepaalde haartypes?', 'a' => 'Bij John Possik zijn we gespecialiseerd in alle haartypes, zowel voor mannen als vrouwen. Of het nu gaat om krullend, steil, dik of dun haar — wij hebben de expertise.'],
                                ['q' => 'Bieden jullie ook kleuren en behandelingen aan?', 'a' => 'Absoluut! Naast knippen bieden wij een breed scala aan behandelingen waaronder kleuren, highlights, keratine treatments en meer. Bekijk onze diensten pagina voor het volledige aanbod.'],
                            ];
                        @endphp
                        @foreach ($faqs as $index => $faq)
                        <div class="border-b border-white/10" x-data="{ open: false }">
                            <button onclick="this.parentElement.classList.toggle('faq-open'); this.querySelector('.faq-icon').classList.toggle('rotate-45')" class="w-full flex items-center justify-between py-6 text-left group">
                                <span class="text-white font-sans font-semibold text-sm md:text-base group-hover:text-primary transition pr-8">{{ $faq['q'] }}</span>
                                <span class="faq-icon text-primary text-2xl transition-transform duration-300 flex-shrink-0">+</span>
                            </button>
                            <div class="faq-answer pr-12">
                                <p class="text-white/50 font-sans text-sm leading-relaxed">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        {{-- Reviews Sectie --}}
        <section id="reviews" class="py-16 md:py-32 bg-[#050504] relative overflow-hidden">
            <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-[radial-gradient(circle,_rgba(187,169,143,0.04)_0%,_transparent_70%)]"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <div class="text-center mb-16">
                    <span class="text-primary font-sans text-[11px] uppercase tracking-widest">Klantbeoordelingen</span>
                    <h2 class="text-white font-display text-4xl md:text-5xl font-bold mt-4">Wat onze klanten zeggen</h2>
                    <div class="flex items-center justify-center gap-2 mt-4">
                        <div class="flex gap-0.5">
                            @for ($i = 0; $i < 5; $i++)
                            <svg class="w-5 h-5 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <span class="text-white/50 font-sans text-sm ml-1">5 / 5 — Google Reviews</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $reviews = [
                            ['name' => 'E. Verboom', 'rating' => 5, 'text' => 'John is een kapper in hart en nieren: klantvriendelijk, sociaal, meedenkend en een goeie leermeester voor zijn stagiaires.', 'date' => 'via Social Deal'],
                            ['name' => 'S. Weltje', 'rating' => 5, 'text' => 'Super kapper! Hij geeft je heel goed advies, hij werkt perfect en is heel gezellig!', 'date' => 'via Social Deal'],
                            ['name' => 'R. Aversteeg', 'rating' => 5, 'text' => 'Gezellige professionele kapsalon, waar goed naar je wensen wordt geluisterd.', 'date' => 'via Social Deal'],
                            ['name' => 'T. Dam', 'rating' => 5, 'text' => 'Het was gezellig, ben hartstikke blij met m\'n kapsel, goed en kundig!!', 'date' => 'via Social Deal'],
                            ['name' => 'J. Van Weperen', 'rating' => 5, 'text' => 'Zeer vriendelijk personeel. Doen hun uiterste best om een zo goed mogelijk resultaat te behalen.', 'date' => 'via Social Deal'],
                            ['name' => 'S. Turiac', 'rating' => 5, 'text' => 'Fijne kapper, hij nam ruim de tijd voor mijn 86 jarige moeder. Heel erg tevreden met het resultaat!', 'date' => 'via Social Deal'],
                        ];
                    @endphp
                    @foreach ($reviews as $review)
                    <div class="flex flex-col border border-white/10 rounded p-6 hover:border-primary/30 transition">
                        <div class="flex gap-0.5 mb-4">
                            @for ($i = 0; $i < $review['rating']; $i++)
                            <svg class="w-4 h-4 text-primary" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            @endfor
                        </div>
                        <p class="text-white/70 font-sans text-sm leading-relaxed mb-6">{{ $review['text'] }}</p>
                        <div class="flex items-center justify-between mt-auto">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-primary/20 flex items-center justify-center">
                                    <span class="text-primary font-sans font-bold text-xs">{{ substr($review['name'], 0, 1) }}</span>
                                </div>
                                <span class="text-white font-sans font-semibold text-sm">{{ $review['name'] }}</span>
                            </div>
                            <span class="text-white/30 font-sans text-xs">{{ $review['date'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="text-center mt-12">
                    <a href="#" target="_blank" class="inline-flex items-center gap-2 border border-white/20 text-white font-sans text-xs uppercase tracking-widest px-8 py-4 rounded hover:border-primary hover:text-primary transition">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 01-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                        Bekijk alle reviews
                    </a>
                </div>
            </div>
        </section>
        {{-- Footer --}}
        <footer class="border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 py-20">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                    {{-- Kolom 1: Logo & info --}}
                    <div>
                        <a href="/" class="flex items-center gap-3 mb-6">
                            <img src="/logo.webp" alt="John Possik Kapsalon" class="h-10 w-auto">
                            <div>
                                <span class="block text-white font-display text-lg font-bold leading-tight">John Possik</span>
                                <span class="block text-primary font-sans text-[11px] uppercase tracking-widest">Doetinchem</span>
                            </div>
                        </a>
                        <p class="text-white/50 font-sans text-sm leading-relaxed mb-6">Premium kapsalon voor mannen en vrouwen in het hart van Doetinchem.</p>
                        <div class="flex items-center gap-4">
                            <a href="#" target="_blank" class="text-white/40 hover:text-primary transition"><svg class="w-5 h-5" viewBox="0 0 640 640" fill="currentColor"><path d="M240 363.3L240 576L356 576L356 363.3L442.5 363.3L460.5 265.5L356 265.5L356 230.9C356 179.2 376.3 159.4 428.7 159.4C445 159.4 458.1 159.8 465.7 160.6L465.7 71.9C451.4 68 416.4 64 396.2 64C289.3 64 240 114.5 240 223.4L240 265.5L174 265.5L174 363.3L240 363.3z"/></svg></a>
                            <a href="#" target="_blank" class="text-white/40 hover:text-primary transition"><svg class="w-5 h-5" viewBox="0 0 640 640" fill="currentColor"><path d="M320.3 205C256.8 204.8 205.2 256.2 205 319.7C204.8 383.2 256.2 434.8 319.7 435C383.2 435.2 434.8 383.8 435 320.3C435.2 256.8 383.8 205.2 320.3 205zM319.7 245.4C360.9 245.2 394.4 278.5 394.6 319.7C394.8 360.9 361.5 394.4 320.3 394.6C279.1 394.8 245.6 361.5 245.4 320.3C245.2 279.1 278.5 245.6 319.7 245.4zM413.1 200.3C413.1 185.5 425.1 173.5 439.9 173.5C454.7 173.5 466.7 185.5 466.7 200.3C466.7 215.1 454.7 227.1 439.9 227.1C425.1 227.1 413.1 215.1 413.1 200.3zM542.8 227.5C541.1 191.6 532.9 159.8 506.6 133.6C480.4 107.4 448.6 99.2 412.7 97.4C375.7 95.3 264.8 95.3 227.8 97.4C192 99.1 160.2 107.3 133.9 133.5C107.6 159.7 99.5 191.5 97.7 227.4C95.6 264.4 95.6 375.3 97.7 412.3C99.4 448.2 107.6 480 133.9 506.2C160.2 532.4 191.9 540.6 227.8 542.4C264.8 544.5 375.7 544.5 412.7 542.4C448.6 540.7 480.4 532.5 506.6 506.2C532.8 480 541 448.2 542.8 412.3C544.9 375.3 544.9 264.5 542.8 227.5zM495 452C487.2 471.6 472.1 486.7 452.4 494.6C422.9 506.3 352.9 503.6 320.3 503.6C287.7 503.6 217.6 506.2 188.2 494.6C168.6 486.8 153.5 471.7 145.6 452C133.9 422.5 136.6 352.5 136.6 319.9C136.6 287.3 134 217.2 145.6 187.8C153.4 168.2 168.5 153.1 188.2 145.2C217.7 133.5 287.7 136.2 320.3 136.2C352.9 136.2 423 133.6 452.4 145.2C472 153 487.1 168.1 495 187.8C506.7 217.3 504 287.3 504 319.9C504 352.5 506.7 422.6 495 452z"/></svg></a>
                            <a href="#" target="_blank" class="text-white/40 hover:text-primary transition"><svg class="w-5 h-5" viewBox="0 0 640 640" fill="currentColor"><path d="M544.5 273.9C500.5 274 457.5 260.3 421.7 234.7L421.7 413.4C421.7 446.5 411.6 478.8 392.7 506C373.8 533.2 347.1 554 316.1 565.6C285.1 577.2 251.3 579.1 219.2 570.9C187.1 562.7 158.3 545 136.5 520.1C114.7 495.2 101.2 464.1 97.5 431.2C93.8 398.3 100.4 365.1 116.1 336C131.8 306.9 156.1 283.3 185.7 268.3C215.3 253.3 248.6 247.8 281.4 252.3L281.4 342.2C266.4 337.5 250.3 337.6 235.4 342.6C220.5 347.6 207.5 357.2 198.4 369.9C189.3 382.6 184.4 398 184.5 413.8C184.6 429.6 189.7 444.8 199 457.5C208.3 470.2 221.4 479.6 236.4 484.4C251.4 489.2 267.5 489.2 282.4 484.3C297.3 479.4 310.4 469.9 319.6 457.2C328.8 444.5 333.8 429.1 333.8 413.4L333.8 64L421.8 64C421.7 71.4 422.4 78.9 423.7 86.2C426.8 102.5 433.1 118.1 442.4 131.9C451.7 145.7 463.7 157.5 477.6 166.5C497.5 179.6 520.8 186.6 544.6 186.6L544.6 274z"/></svg></a>
                        </div>
                    </div>

                    {{-- Kolom 2: Navigatie --}}
                    <div>
                        <h4 class="text-white font-sans font-semibold text-xs uppercase tracking-widest mb-6">Navigatie</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-white/50 font-sans text-sm hover:text-primary transition">Home</a></li>
                            <li><a href="#diensten" class="text-white/50 font-sans text-sm hover:text-primary transition">Diensten</a></li>
                            <li><a href="#over-ons" class="text-white/50 font-sans text-sm hover:text-primary transition">Over Ons</a></li>
                            <li><a href="#" class="text-white/50 font-sans text-sm hover:text-primary transition">Webshop</a></li>
                            <li><a href="#faq" class="text-white/50 font-sans text-sm hover:text-primary transition">Veelgestelde Vragen</a></li>
                            <li><a href="#" class="text-white/50 font-sans text-sm hover:text-primary transition">Contact</a></li>
                        </ul>
                    </div>

                    {{-- Kolom 3: Openingstijden --}}
                    <div>
                        <h4 class="text-white font-sans font-semibold text-xs uppercase tracking-widest mb-6">Openingstijden</h4>
                        <ul class="space-y-3 font-sans text-sm">
                            <li class="flex justify-between"><span class="text-white/50">Maandag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Dinsdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Woensdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Donderdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Vrijdag</span><span class="text-white/70">09:00 – 18:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Zaterdag</span><span class="text-white/70">09:00 – 17:00</span></li>
                            <li class="flex justify-between"><span class="text-white/50">Zondag</span><span class="text-white/40">Gesloten</span></li>
                        </ul>
                    </div>

                    {{-- Kolom 4: Contact --}}
                    <div>
                        <h4 class="text-white font-sans font-semibold text-xs uppercase tracking-widest mb-6">Contact</h4>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <svg class="w-4 h-4 text-primary mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 0115 0z"/></svg>
                                <span class="text-white/50 font-sans text-sm">Hamburgerstraat 12<br>7001 AR Doetinchem</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-primary flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                                <a href="tel:+31612345678" class="text-white/50 font-sans text-sm hover:text-primary transition">+31 6 1234 5678</a>
                            </li>
                            <li class="flex items-center gap-3">
                                <svg class="w-4 h-4 text-primary flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                                <a href="mailto:info@jpkapsalon.nl" class="text-white/50 font-sans text-sm hover:text-primary transition">info@jpkapsalon.nl</a>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <a href="#" class="bg-primary text-black font-sans font-semibold text-xs uppercase tracking-widest px-6 py-3 rounded hover:bg-[#d4c4ad] transition inline-block">Afspraak maken</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bottom bar --}}
            <div class="border-t border-white/10">
                <div class="max-w-7xl mx-auto px-4 py-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="text-white/30 font-sans text-xs">&copy; {{ date('Y') }} John Possik Kapsalon. Alle rechten voorbehouden.</p>
                    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                        <a href="#" class="text-white/30 font-sans text-xs hover:text-white/60 transition">Privacybeleid</a>
                        <a href="#" class="text-white/30 font-sans text-xs hover:text-white/60 transition">Algemene Voorwaarden</a>
                        <span class="text-white/30 font-sans text-xs">Website door <a href="https://halfmanmedia.nl" target="_blank" class="hover:text-white/60 transition">HalfmanMedia</a></span>
                    </div>
                </div>
            </div>
        </footer>

        <style>
            .faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s ease, padding 0.3s ease; padding-top: 0; padding-bottom: 0; }
            .faq-open .faq-answer { max-height: 200px; padding-bottom: 1.5rem; }
        </style>
        <script>
            function playAllVideos() {
                document.querySelectorAll('video').forEach(function(v) {
                    v.muted = true;
                    v.playsInline = true;
                    v.play().catch(function() {});
                });
            }
            document.addEventListener('DOMContentLoaded', playAllVideos);
            document.addEventListener('touchstart', function() { playAllVideos(); }, { once: true });
            document.addEventListener('scroll', function() { playAllVideos(); }, { once: true });
        </script>
    </body>
</html>
