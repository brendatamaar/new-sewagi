<template>
    <div :class="[buttonClasses, fullWidth, size]">
        <slot />
    </div>
</template>

<script setup lang="ts">
import { cva } from 'class-variance-authority';
import { computed } from 'vue';

const buttonVariants = cva(
    'inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50',
    {
        variants: {
            variant: {
                default: 'bg-main color-white hover:bg-primary/90',
                secondary:
                    'bg-secondary color-white hover:bg-secondary/80',
                outline:
                    'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
                disabled:
                    'bg-secondary text-secondary-foreground hover:bg-secondary/80'
            },
            fullWidth: {
                true: 'w-full',
                false: 'w-fit',
            },
            size: {
                default: 'h-10 px-4 py-2',
                sm: 'h-9 rounded-md px-3',
                lg: 'h-11 rounded-md px-8',
                icon: 'h-10 w-10',
            },
        },
        defaultVariants: {
            variant: 'default',
            fullWidth: false,
            size: 'default',
        },
    },
);

interface ButtonProps {
    variant?: 'default' | 'secondary' | 'outline' | 'disabled'
    size?: 'default' | 'sm' | 'lg' | 'icon'
    fullWidth?: boolean
}

const props = withDefaults(defineProps<ButtonProps>(), {
    variant: 'default',
    size: 'default',
    fullWidth: false,
});

const buttonClasses = computed(() =>
    buttonVariants({ variant: props.variant, size: props.size, fullWidth: props.fullWidth }),
);
</script>

<style scoped></style>