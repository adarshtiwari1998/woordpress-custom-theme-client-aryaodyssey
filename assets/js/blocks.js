/**
 * AryaOdyssey Custom Gutenberg Blocks
 * Built with React and WordPress Block Editor
 */

(function() {
    'use strict';

    const { registerBlockType } = wp.blocks;
    const { createElement: el, Fragment } = wp.element;
    const { InspectorControls, InnerBlocks, RichText, MediaUpload, ColorPalette } = wp.blockEditor;
    const { PanelBody, Button, SelectControl, RangeControl, ToggleControl } = wp.components;
    const { __ } = wp.i18n;

    // Hero Block
    registerBlockType('aryaodyssey/hero-block', {
        title: __('AryaOdyssey Hero Section', 'aryaodyssey'),
        icon: 'format-image',
        category: 'aryaodyssey',
        description: __('Hero section with background image and call-to-action', 'aryaodyssey'),
        attributes: {
            title: {
                type: 'string',
                default: __('Discover the Magic of Manali', 'aryaodyssey')
            },
            subtitle: {
                type: 'string',
                default: __('Experience the breathtaking beauty of the Himalayas', 'aryaodyssey')
            },
            backgroundImage: {
                type: 'object',
                default: null
            },
            buttonText: {
                type: 'string',
                default: __('Explore Services', 'aryaodyssey')
            },
            buttonUrl: {
                type: 'string',
                default: '/services'
            },
            height: {
                type: 'number',
                default: 100
            }
        },
        edit: function(props) {
            const { attributes, setAttributes } = props;
            const { title, subtitle, backgroundImage, buttonText, buttonUrl, height } = attributes;

            return el(Fragment, {},
                el(InspectorControls, {},
                    el(PanelBody, { title: __('Hero Settings', 'aryaodyssey') },
                        el(RangeControl, {
                            label: __('Height (vh)', 'aryaodyssey'),
                            value: height,
                            onChange: (value) => setAttributes({ height: value }),
                            min: 50,
                            max: 100
                        }),
                        el('h4', {}, __('Background Image', 'aryaodyssey')),
                        el(MediaUpload, {
                            onSelect: (media) => setAttributes({ backgroundImage: media }),
                            allowedTypes: ['image'],
                            value: backgroundImage ? backgroundImage.id : '',
                            render: ({ open }) => el(Button, {
                                onClick: open,
                                isPrimary: true
                            }, backgroundImage ? __('Change Image', 'aryaodyssey') : __('Select Image', 'aryaodyssey'))
                        }),
                        el('label', {}, __('Button URL', 'aryaodyssey')),
                        el('input', {
                            type: 'text',
                            value: buttonUrl,
                            onChange: (e) => setAttributes({ buttonUrl: e.target.value }),
                            style: { width: '100%', marginBottom: '16px' }
                        })
                    )
                ),
                el('div', {
                    className: 'aryaodyssey-hero-block',
                    style: {
                        minHeight: `${height}vh`,
                        backgroundImage: backgroundImage ? `url(${backgroundImage.url})` : 'linear-gradient(135deg, #2d5016 0%, #4a7c59 100%)',
                        backgroundSize: 'cover',
                        backgroundPosition: 'center',
                        display: 'flex',
                        alignItems: 'center',
                        justifyContent: 'center',
                        position: 'relative',
                        color: 'white',
                        textAlign: 'center',
                        padding: '40px 20px'
                    }
                },
                    el('div', {
                        style: {
                            position: 'absolute',
                            top: 0,
                            left: 0,
                            right: 0,
                            bottom: 0,
                            backgroundColor: 'rgba(0, 0, 0, 0.4)'
                        }
                    }),
                    el('div', {
                        style: {
                            position: 'relative',
                            zIndex: 2,
                            maxWidth: '800px'
                        }
                    },
                        el(RichText, {
                            tagName: 'h1',
                            placeholder: __('Hero Title', 'aryaodyssey'),
                            value: title,
                            onChange: (value) => setAttributes({ title: value }),
                            style: {
                                fontSize: '3rem',
                                fontWeight: 'bold',
                                marginBottom: '20px',
                                fontFamily: 'Playfair Display, serif'
                            }
                        }),
                        el(RichText, {
                            tagName: 'p',
                            placeholder: __('Hero Subtitle', 'aryaodyssey'),
                            value: subtitle,
                            onChange: (value) => setAttributes({ subtitle: value }),
                            style: {
                                fontSize: '1.3rem',
                                marginBottom: '30px',
                                opacity: 0.9
                            }
                        }),
                        el(RichText, {
                            tagName: 'span',
                            placeholder: __('Button Text', 'aryaodyssey'),
                            value: buttonText,
                            onChange: (value) => setAttributes({ buttonText: value }),
                            style: {
                                display: 'inline-block',
                                padding: '16px 32px',
                                backgroundColor: '#2d5016',
                                color: 'white',
                                borderRadius: '50px',
                                fontWeight: '500',
                                cursor: 'pointer'
                            }
                        })
                    )
                )
            );
        },
        save: function(props) {
            const { attributes } = props;
            const { title, subtitle, backgroundImage, buttonText, buttonUrl, height } = attributes;

            return el('div', {
                className: 'hero-section',
                style: { height: `${height}vh` }
            },
                el('div', { className: 'hero-background' },
                    backgroundImage && el('div', {
                        className: 'hero-image',
                        style: {
                            backgroundImage: `url(${backgroundImage.url})`,
                            backgroundSize: 'cover',
                            backgroundPosition: 'center'
                        }
                    }),
                    el('div', { className: 'hero-overlay' }),
                    el('div', { className: 'hero-content' },
                        el('div', { className: 'container' },
                            el('div', { className: 'hero-text text-center' },
                                el(RichText.Content, {
                                    tagName: 'h1',
                                    className: 'hero-title text-white',
                                    value: title
                                }),
                                el(RichText.Content, {
                                    tagName: 'p',
                                    className: 'hero-subtitle text-white',
                                    value: subtitle
                                }),
                                el('div', { className: 'hero-buttons' },
                                    el('a', {
                                        href: buttonUrl,
                                        className: 'btn btn-primary btn-lg'
                                    },
                                        el(RichText.Content, { value: buttonText }),
                                        el('i', { 'data-feather': 'arrow-right' })
                                    )
                                )
                            )
                        )
                    )
                )
            );
        }
    });

    // Services Block
    registerBlockType('aryaodyssey/services-block', {
        title: __('AryaOdyssey Services Grid', 'aryaodyssey'),
        icon: 'grid-view',
        category: 'aryaodyssey',
        description: __('Display services in a grid layout', 'aryaodyssey'),
        attributes: {
            title: {
                type: 'string',
                default: __('Our Services', 'aryaodyssey')
            },
            subtitle: {
                type: 'string',
                default: __('Experience the best of Manali with our comprehensive services', 'aryaodyssey')
            },
            numberOfPosts: {
                type: 'number',
                default: 4
            },
            showExcerpt: {
                type: 'boolean',
                default: true
            },
            layout: {
                type: 'string',
                default: 'grid'
            }
        },
        edit: function(props) {
            const { attributes, setAttributes } = props;
            const { title, subtitle, numberOfPosts, showExcerpt, layout } = attributes;

            return el(Fragment, {},
                el(InspectorControls, {},
                    el(PanelBody, { title: __('Services Settings', 'aryaodyssey') },
                        el(RangeControl, {
                            label: __('Number of Services', 'aryaodyssey'),
                            value: numberOfPosts,
                            onChange: (value) => setAttributes({ numberOfPosts: value }),
                            min: 1,
                            max: 12
                        }),
                        el(ToggleControl, {
                            label: __('Show Excerpt', 'aryaodyssey'),
                            checked: showExcerpt,
                            onChange: (value) => setAttributes({ showExcerpt: value })
                        }),
                        el(SelectControl, {
                            label: __('Layout', 'aryaodyssey'),
                            value: layout,
                            options: [
                                { label: __('Grid', 'aryaodyssey'), value: 'grid' },
                                { label: __('List', 'aryaodyssey'), value: 'list' },
                                { label: __('Carousel', 'aryaodyssey'), value: 'carousel' }
                            ],
                            onChange: (value) => setAttributes({ layout: value })
                        })
                    )
                ),
                el('div', { className: 'aryaodyssey-services-block' },
                    el(RichText, {
                        tagName: 'h2',
                        placeholder: __('Services Title', 'aryaodyssey'),
                        value: title,
                        onChange: (value) => setAttributes({ title: value }),
                        style: { textAlign: 'center', marginBottom: '20px' }
                    }),
                    el(RichText, {
                        tagName: 'p',
                        placeholder: __('Services Subtitle', 'aryaodyssey'),
                        value: subtitle,
                        onChange: (value) => setAttributes({ subtitle: value }),
                        style: { textAlign: 'center', marginBottom: '40px', color: '#666' }
                    }),
                    el('div', {
                        style: {
                            display: 'grid',
                            gridTemplateColumns: layout === 'grid' ? 'repeat(auto-fit, minmax(250px, 1fr))' : '1fr',
                            gap: '30px',
                            padding: '20px',
                            backgroundColor: '#f8f9fa',
                            borderRadius: '10px'
                        }
                    },
                        el('div', { style: { padding: '20px', backgroundColor: 'white', borderRadius: '10px', textAlign: 'center' } },
                            el('div', { style: { fontSize: '2rem', marginBottom: '15px' } }, '🏠'),
                            el('h3', {}, __('Accommodation', 'aryaodyssey')),
                            showExcerpt && el('p', { style: { color: '#666', fontSize: '0.9rem' } }, __('Luxury rooms with mountain views', 'aryaodyssey'))
                        ),
                        el('div', { style: { padding: '20px', backgroundColor: 'white', borderRadius: '10px', textAlign: 'center' } },
                            el('div', { style: { fontSize: '2rem', marginBottom: '15px' } }, '🚗'),
                            el('h3', {}, __('Transportation', 'aryaodyssey')),
                            showExcerpt && el('p', { style: { color: '#666', fontSize: '0.9rem' } }, __('Reliable transport services', 'aryaodyssey'))
                        ),
                        numberOfPosts >= 3 && el('div', { style: { padding: '20px', backgroundColor: 'white', borderRadius: '10px', textAlign: 'center' } },
                            el('div', { style: { fontSize: '2rem', marginBottom: '15px' } }, '🥾'),
                            el('h3', {}, __('Trekking', 'aryaodyssey')),
                            showExcerpt && el('p', { style: { color: '#666', fontSize: '0.9rem' } }, __('Adventure trekking experiences', 'aryaodyssey'))
                        ),
                        numberOfPosts >= 4 && el('div', { style: { padding: '20px', backgroundColor: 'white', borderRadius: '10px', textAlign: 'center' } },
                            el('div', { style: { fontSize: '2rem', marginBottom: '15px' } }, '👥'),
                            el('h3', {}, __('Tour Guides', 'aryaodyssey')),
                            showExcerpt && el('p', { style: { color: '#666', fontSize: '0.9rem' } }, __('Professional local guides', 'aryaodyssey'))
                        )
                    )
                )
            );
        },
        save: function() {
            return el(InnerBlocks.Content);
        }
    });

    // CTA Block
    registerBlockType('aryaodyssey/cta-block', {
        title: __('AryaOdyssey Call to Action', 'aryaodyssey'),
        icon: 'megaphone',
        category: 'aryaodyssey',
        description: __('Call to action section with buttons', 'aryaodyssey'),
        attributes: {
            title: {
                type: 'string',
                default: __('Ready to Start Your Adventure?', 'aryaodyssey')
            },
            subtitle: {
                type: 'string',
                default: __('Book your perfect mountain getaway today', 'aryaodyssey')
            },
            primaryButtonText: {
                type: 'string',
                default: __('Book Now', 'aryaodyssey')
            },
            primaryButtonUrl: {
                type: 'string',
                default: '/reservation'
            },
            secondaryButtonText: {
                type: 'string',
                default: __('Contact Us', 'aryaodyssey')
            },
            secondaryButtonUrl: {
                type: 'string',
                default: '/contact'
            },
            backgroundColor: {
                type: 'string',
                default: '#f8f9fa'
            }
        },
        edit: function(props) {
            const { attributes, setAttributes } = props;
            const { title, subtitle, primaryButtonText, primaryButtonUrl, secondaryButtonText, secondaryButtonUrl, backgroundColor } = attributes;

            return el(Fragment, {},
                el(InspectorControls, {},
                    el(PanelBody, { title: __('CTA Settings', 'aryaodyssey') },
                        el('h4', {}, __('Background Color', 'aryaodyssey')),
                        el(ColorPalette, {
                            value: backgroundColor,
                            onChange: (value) => setAttributes({ backgroundColor: value })
                        }),
                        el('label', {}, __('Primary Button URL', 'aryaodyssey')),
                        el('input', {
                            type: 'text',
                            value: primaryButtonUrl,
                            onChange: (e) => setAttributes({ primaryButtonUrl: e.target.value }),
                            style: { width: '100%', marginBottom: '16px' }
                        }),
                        el('label', {}, __('Secondary Button URL', 'aryaodyssey')),
                        el('input', {
                            type: 'text',
                            value: secondaryButtonUrl,
                            onChange: (e) => setAttributes({ secondaryButtonUrl: e.target.value }),
                            style: { width: '100%' }
                        })
                    )
                ),
                el('div', {
                    className: 'aryaodyssey-cta-block',
                    style: {
                        padding: '60px 40px',
                        backgroundColor: backgroundColor,
                        borderRadius: '15px',
                        textAlign: 'center'
                    }
                },
                    el(RichText, {
                        tagName: 'h2',
                        placeholder: __('CTA Title', 'aryaodyssey'),
                        value: title,
                        onChange: (value) => setAttributes({ title: value }),
                        style: { marginBottom: '20px', color: '#333' }
                    }),
                    el(RichText, {
                        tagName: 'p',
                        placeholder: __('CTA Subtitle', 'aryaodyssey'),
                        value: subtitle,
                        onChange: (value) => setAttributes({ subtitle: value }),
                        style: { marginBottom: '40px', color: '#666', fontSize: '1.1rem' }
                    }),
                    el('div', {
                        style: {
                            display: 'flex',
                            gap: '20px',
                            justifyContent: 'center',
                            flexWrap: 'wrap'
                        }
                    },
                        el(RichText, {
                            tagName: 'span',
                            placeholder: __('Primary Button', 'aryaodyssey'),
                            value: primaryButtonText,
                            onChange: (value) => setAttributes({ primaryButtonText: value }),
                            style: {
                                display: 'inline-block',
                                padding: '16px 32px',
                                backgroundColor: '#2d5016',
                                color: 'white',
                                borderRadius: '50px',
                                fontWeight: '500',
                                cursor: 'pointer'
                            }
                        }),
                        el(RichText, {
                            tagName: 'span',
                            placeholder: __('Secondary Button', 'aryaodyssey'),
                            value: secondaryButtonText,
                            onChange: (value) => setAttributes({ secondaryButtonText: value }),
                            style: {
                                display: 'inline-block',
                                padding: '16px 32px',
                                backgroundColor: 'transparent',
                                color: '#2d5016',
                                border: '2px solid #2d5016',
                                borderRadius: '50px',
                                fontWeight: '500',
                                cursor: 'pointer'
                            }
                        })
                    )
                )
            );
        },
        save: function(props) {
            const { attributes } = props;
            const { title, subtitle, primaryButtonText, primaryButtonUrl, secondaryButtonText, secondaryButtonUrl, backgroundColor } = attributes;

            return el('section', {
                className: 'cta-section section-padding',
                style: { backgroundColor: backgroundColor }
            },
                el('div', { className: 'container' },
                    el('div', { className: 'cta-content text-center' },
                        el(RichText.Content, {
                            tagName: 'h2',
                            className: 'cta-title',
                            value: title
                        }),
                        el(RichText.Content, {
                            tagName: 'p',
                            className: 'cta-subtitle',
                            value: subtitle
                        }),
                        el('div', { className: 'cta-buttons' },
                            el('a', {
                                href: primaryButtonUrl,
                                className: 'btn btn-primary btn-lg'
                            },
                                el(RichText.Content, { value: primaryButtonText }),
                                el('i', { 'data-feather': 'arrow-right' })
                            ),
                            el('a', {
                                href: secondaryButtonUrl,
                                className: 'btn btn-outline btn-lg'
                            },
                                el(RichText.Content, { value: secondaryButtonText }),
                                el('i', { 'data-feather': 'phone' })
                            )
                        )
                    )
                )
            );
        }
    });

})();
