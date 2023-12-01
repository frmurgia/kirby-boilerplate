module.exports = {
  mode: 'jit',
  
  theme: {
    
    fontFamily: {
      work: ['Work Sans', 'sans'] ,
      body: ['work'], // Sostituisci 'work' con il nome del tuo font
      'body': ['"works"'],
    },
    
    fontSize: {
      'a:link': ['3vh', {
        fontWeight: '800',
        letterSpacing: '0.01em',
      }],
      'strong': ['3vh', {
        fontWeight: '800',
        letterSpacing: '0.01em',
      }],
      ' h2': ['3vh', {
        fontWeight: '800',
        letterSpacing: '0.01em',
      }],

      'base': ['2vh', {
        fontWeight: '400',
        letterSpacing: '0.01em',
      }],

      'title': ['13vh', {
        fontWeight: '600',
      }],
      'title-mobile': ['10vh', {
        fontWeight: '600',
      }],
      

      'headline': ['5vh', {
        fontWeight: '600',
        letterSpacing: '0.02em',
      }],
      'headline-mobile': ['4vh', {
        fontWeight: '600',
        letterSpacing: '0.02em',
      }],

      'headline-project-title': ['5vh', {
        fontWeight: '700',
        letterSpacing: '0.02em',
        
      }],
      'headline-project-title-mobile': ['4vh', {
        fontWeight: '700',
        letterSpacing: '0.02em',
        
      }],


      'headline-project': ['2.1vh', {
        fontWeight: '700',
        letterSpacing: '0.02em',
      }],

      'anno': ['6vh', {
        
        lineHeight: '10vh',
        letterSpacing: '-0.01em',
        fontWeight: '700',
      }],
      '2xl': ['5vh', {
        lineHeight: '2rem',
        letterSpacing: '-0.01em',
        fontWeight: '700',
      }],
      '3xl': ['1.875rem', {
        lineHeight: '2.25rem',
        letterSpacing: '-0.02em',
        fontWeight: '700',
      }],
  
    },
    
    colors: {
      sfondo:'rgb(255 254 250)',
      'collegamenti':'rgb(228 144 142)',      
      'principale': '#de3618'
  },
    
  // cursor: {
  //   'fancy': 'url(hand.cur), pointer',
  // }
  },//fine theme
  keyframes: theme => ({
    fadeOut: {
      '0%': { backgroundColor: theme('colors.red.300') },
      '100%': { backgroundColor: theme('colors.transparent') },
    },
  }),
    extend: {
      animation: {
        fade: 'fadeOut 5s ease-in-out',
      },
    },    
  

  variants: {
    extend: { },
  },
  plugins: [ ],
  content: [
    './site/**/*.php',
    './site/tailwind/*.css',
  ],
}
