<template>
    <div class="content">
        <div class="content__body">
            <span>Busca un palabra</span>

            <div class="input-container">
                <input
                    type="text"
                    name="text"
                    class="input"
                    placeholder="search..."
                />
                <span class="icon">
                    <svg
                        width="19px"
                        height="19px"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g
                            id="SVGRepo_tracerCarrier"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        ></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                opacity="1"
                                d="M14 5H20"
                                stroke="#000"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                opacity="1"
                                d="M14 8H17"
                                stroke="#000"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                d="M21 11.5C21 16.75 16.75 21 11.5 21C6.25 21 2 16.75 2 11.5C2 6.25 6.25 2 11.5 2"
                                stroke="#000"
                                stroke-width="2.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                            <path
                                opacity="1"
                                d="M22 22L20 20"
                                stroke="#000"
                                stroke-width="3.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            ></path>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</template>
<script></script>
<style>
.content {
    width: 100%;
    height: 450px;
    --s: 37px; /* control the size */

    --c: #0000, #282828 0.5deg 119.5deg, #0000 120deg;
    --g1: conic-gradient(from 60deg at 56.25% calc(425% / 6), var(--c));
    --g2: conic-gradient(from 180deg at 43.75% calc(425% / 6), var(--c));
    --g3: conic-gradient(from -60deg at 50% calc(175% / 12), var(--c));
    background: var(--g1), var(--g1) var(--s) calc(1.73 * var(--s)), var(--g2),
        var(--g2) var(--s) calc(1.73 * var(--s)), var(--g3) var(--s) 0,
        var(--g3) 0 calc(1.73 * var(--s)) #1e1e1e;
    background-size: calc(2 * var(--s)) calc(3.46 * var(--s));
}

.content__body {
    height: 100%;
    display: flex;
    align-items: center;
    padding-top: 4rem;
    flex-direction: column;
    row-gap: 1rem;
}
.content__body span {
    color: aliceblue;
    font-size: 30px;
}

.input-container {
    width: 50%;
    position: relative;
}

.icon {
    position: absolute;
    right: 10px;
    top: calc(50% + 5px);
    transform: translateY(calc(-50% - 5px));
}

.input {
    width: 100%;
    height: 40px;
    padding: 10px;
    transition: 0.2s linear;
    border: 2.5px solid black;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.input:focus {
    outline: none;
    border: 0.5px solid black;
    box-shadow: -5px -5px 0px black;
}

.input-container:hover > .icon {
    animation: anim 1s linear infinite;
}

@keyframes anim {
    0%,
    100% {
        transform: translateY(calc(-50% - 5px)) scale(1);
    }

    50% {
        transform: translateY(calc(-50% - 5px)) scale(1.1);
    }
}
</style>
