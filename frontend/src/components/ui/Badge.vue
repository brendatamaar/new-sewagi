<template>
    <div :class="[buttonClasses, rounded]">
        <slot />
    </div>
</template>

<script setup lang="ts">
import { cva } from 'class-variance-authority';
import { computed } from 'vue';

const buttonVariants = cva(
    'inline-flex items-center justify-center text-button px-10 h-12',
    {
        variants: {
            variant: {
                default: 'default color-white',
                outline:
                    'border outline bg-transparent',
            },
            rounded: {
                true: 'rounded-full',
                false: 'rounded-sm',
            },
        },
        defaultVariants: {
            variant: 'default',
            rounded: false,
        },
    },
);

interface ButtonProps {
    variant?: 'default' | 'outline'
    rounded?: boolean
}

const props = withDefaults(defineProps<ButtonProps>(), {
    variant: 'default',
    rounded: false,
});

const buttonClasses = computed(() =>
    buttonVariants({ variant: props.variant, rounded: props.rounded }),
);
</script>

<style scoped>
.default {
    background-color: var(--color-primary);
    border-color: var(--color-primary);
}
.outline {
    color: var(--color-primary);
    border-color: var(--color-primary);
}
</style>