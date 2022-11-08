require 'gosu'

module ZOrder
  BACKGROUND, MIDDLE, TOP = *0..2
end

WIDTH = 800
HEIGHT = 800
SHAPE_DIM = 50
 
class GameWindow < Gosu::Window

	
  # initialize creates a window with a width an a height
  # and a caption. It also sets up any variables to be used.
 
def initialize 
    super WIDTH, HEIGHT, false
    #@pointer = false
    @pointer = Gosu::Image.new(self, 'media/dd.png')
    @background_image = Gosu::Image.new("media/range.png", :tileable => true)

    
	#Ruby's code
	self.caption = "HASSAAN HIT THE TARGETS GAME"
	@message = Gosu::Image.from_text(self, 'Hit The Targets!!! Press ESC to EXIT', Gosu.default_font_name, 40)
	
	
	# Using these VARIABLE FOR MOUSE INTIALLY THEY ARE 0
	@px = @py = 0

	
	
	@v1 = 0
	@v2 = 0
	@v3 = 0
	@v4 = 0
	@v5 = 0
	@v6 = 0
	@v7 = 0
	@v8 = 0
	
	# week 2 and week 3 syllabus used. 
	# (..) is being used to make a range
	@r1 = rand(1..800)
	@r11 = rand(1..800)
	@r2 = rand(1..800)
	@r22 = rand(1..800)
	@r3 = rand(1..800)
	@r33 = rand(1..800)
	@r4 = rand(1..800)
	@r44 = rand(1..800)
	@r5 = rand(1..800)
	@r55 = rand(1..800)
	@r6 = rand(1..800)
	@r66 = rand(1..800)
	@r7 = rand(1..800)
	@r77 = rand(1..800)
	@r8 = rand(1..800)
	@r88 = rand(1..800)
	@music = Gosu::Song.new(self, 'media/1.wav')
	@music.volume = 0.375 
	

end
  
def update
						
	@px = mouse_x 
	@py = mouse_y 
		
		if @px > @r1 && @px < @r1 + SHAPE_DIM && @py > @r11 && @py < @r11 + SHAPE_DIM
		@v8 = 1
		@music.play
		true
		else
		false
		end
	
		if @px > @r2 && @px < @r2 + SHAPE_DIM && @py > @r22 && @py < @r22 + SHAPE_DIM
		@v7 = 1
		@music.play
		true
		else
		false
		end
	
		if @px > @r3 && @px < @r3 + SHAPE_DIM && @py > @r33 && @py < @r33 + SHAPE_DIM
		@v6 = 1
		@music.play
		true
		else
		false
		end
	

	if @px > @r4 && @px < @r4 + SHAPE_DIM && @py > @r44 && @py < @r44 + SHAPE_DIM
		@v5 = 1
		@music.play
		true
		else
		false
	end
	if @px > @r5 && @px < @r5 + SHAPE_DIM && @py > @r55 && @py < @r55 + SHAPE_DIM
		@v4 = 1
		@music.play
		true
		else
		false
	end
	
	if @px > @r6 && @px < @r6 + SHAPE_DIM && @py > @r66 && @py < @r66 + SHAPE_DIM
		@v3 = 1
		@music.play
		true
		else
		false
	end
	
	if @px > @r7 && @px < @r7 + SHAPE_DIM && @py > @r77 && @py < @r77 + SHAPE_DIM
		@v2 = 1
		@music.play
		true
		else
		false
	end 
	
	if @px > @r8 && @px < @r8 + SHAPE_DIM && @py > @r88 && @py < @r88 + SHAPE_DIM
		@v1 = 1
		@music.play
		true
		else
		false
	end 
end
  
	 


def draw
	@background_image.draw(0, 0, ZOrder::BACKGROUND)
	if @v8 == 0
	Gosu.draw_rect(@r1, @r11, SHAPE_DIM, SHAPE_DIM, Gosu::Color::GREEN, ZOrder::TOP, mode=:default)

	end
	
	if @v7 == 0
	Gosu.draw_rect(@r2, @r22, SHAPE_DIM, SHAPE_DIM, Gosu::Color::AQUA, ZOrder::TOP, mode=:default)
	end
  
	if @v6 == 0
	Gosu.draw_rect(@r3, @r33, SHAPE_DIM, SHAPE_DIM, Gosu::Color::BLUE, ZOrder::TOP, mode=:default)
	end

	
	if @v5 == 0
	Gosu.draw_rect(@r4, @r44, SHAPE_DIM, SHAPE_DIM, Gosu::Color::YELLOW, ZOrder::TOP, mode=:default)
	end
	if @v4 == 0
	Gosu.draw_rect(@r5, @r55, SHAPE_DIM, SHAPE_DIM, Gosu::Color::FUCHSIA, ZOrder::TOP, mode=:default)
	end
	if @v3 == 0
	Gosu.draw_rect(@r6, @r66, SHAPE_DIM, SHAPE_DIM, Gosu::Color::CYAN, ZOrder::TOP, mode=:default)
	end
	if @v2 == 0
	Gosu.draw_rect(@r7, @r77, SHAPE_DIM, SHAPE_DIM, Gosu::Color::WHITE, ZOrder::TOP, mode=:default)
	end
	if @v1 == 0
	Gosu.draw_rect(@r8, @r88, SHAPE_DIM, SHAPE_DIM, Gosu::Color::RED, ZOrder::TOP, mode=:default)
	end
	
	@pointer.draw(@px,@py,0)
	@message.draw(0, 0, 0) 
end
  
#End program with ESC  
def button_down(id)
    if id == Gosu::KB_ESCAPE
      close
    else
      super
    end
end



end	
window = GameWindow.new
window.show
